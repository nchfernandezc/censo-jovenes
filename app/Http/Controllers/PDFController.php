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
    
        return $pdf->stream('formulario_censo.pdf');
    }
    

}

