<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Registro;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $registro = Registro::findOrFail($id);
    
        $maxLength = 90; 
        
        $text = $registro->descripcion_p;
        
        $words = explode(' ', $text);

        $lines = [];
        $currentLine = '';

        foreach ($words as $word) {
            if (strlen($currentLine . ' ' . $word) > $maxLength) {
                $lines[] = $currentLine;
                $currentLine = $word; 
            } else {
                $currentLine .= ' ' . $word;
            }
        }
        
        if ($currentLine) {
            $lines[] = $currentLine;
        }
        
        $lines = array_map('trim', $lines);
    
        $user = [
            'grado' => $registro->grado,
            'categoria_p' => $registro->categoria_p,
        ];
    
        $pdf = Pdf::loadView('admin.registro-pdf', compact('registro', 'user', 'lines'));
    
        return $pdf->stream('registro_'.$registro->id.'.pdf');
    }

    public function generarReporte(Request $request)
    {
        // Obtener filtros
        $filters = $request->only(['parroquia', 'municipio', 'ocupacion', 'grado_p', 'categoria_p']);
    
        $registros = Registro::where(function ($query) use ($filters) {
            foreach ($filters as $key => $value) {
                if (!empty($value)) {
                    $query->where($key, $value);
                }
            }
        })->get();
    
        if ($registros->isEmpty()) {
            return redirect()->back()->with([
                'status' => 'report-error',
                'error' => 'No se encontraron registros con los filtros seleccionados.'
            ]);
        }

        $filtrosAplicados = array_filter($filters);
    
        $pdf = PDF::loadView('admin.reporte', compact('registros', 'filtrosAplicados'));
    
        return $pdf->stream('reporte.pdf');
    }
    
    

}

