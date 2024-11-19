<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin/registro/ingreso');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'cedula' => 'required|string|max:100',
                'nombre' => 'required|string|max:100',
                'apellido' => 'required|string',
                'edad' => 'required|date',
                'email' => 'required|email|max:255',
                'telefono' => 'required|string|max:11',
                'municipio' => 'required|not_in:',
                'parroquia' => 'required|not_in:',
                'ocupacion' => 'required|string',
                'grado' => 'required|string',
                'categoria_p' => 'required|string',
                'descripcion_p' => 'required|string',
            ],
            [

                "required" => 'Rellenar el campo :attribute es obligatorio.',
                "categoria.not_in" => 'Por favor, seleccione una categoría válida.',
                'telefono.max' => 'El número de teléfono no puede exceder los 11 caracteres.',
            ]
        );

        $datosCenso = request()->except('_token');

        Registro::insert($datosCenso);

        return redirect('admin/registro')->with('Mensaje', 'Agregado con exito');
    }
    /**
     * Display the specified resource.
     */
    public function show(registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $registro = registro::where('id', $id)->firstOrFail();
        //
        return view('admin/registro.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'cedula' => 'required|string|max:100',
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string',
            'edad' => 'required|date',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'municipio' => 'required|not_in:',
            'parroquia' => 'required|not_in:',
            'ocupacion' => 'required|string',
            'grado' => 'required|string',
            'categoria_p' => 'required|string',
            'descripcion_p' => 'required|string',
        ]);
    
        try {
            $registro = Registro::findOrFail($id);
            $registro->update($validated);
    
            return redirect()->route('vista.index')->with('success', 'Registro actualizado con éxito.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error al actualizar el registro.');
        }
    }
    
    

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        try {
            $registro = Registro::findOrFail($id);
            $registro->delete();
    
            return response()->json(['status' => 'success', 'message' => 'Registro eliminado con éxito']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al eliminar el registro.'], 500);
        }
    }
    

    public function vista()
    {
        $registros = Registro::all()->map(function ($registro) {
            $registro->edad = \Carbon\Carbon::parse($registro->edad)->age;
            return $registro;
        });
        return view('admin.registro', compact('registros'));
    }

    public function filtrar()
    {
        $parroquias = Registro::select('parroquia')->distinct()->pluck('parroquia');
        $municipios = Registro::select('municipio')->distinct()->pluck('municipio');
        $ocupaciones = Registro::select('ocupacion')->distinct()->pluck('ocupacion');
        $grados = Registro::select('grado')->distinct()->pluck('grado');
        $categorias = Registro::select('categoria_p')->distinct()->pluck('categoria_p');
    
        return view('admin/registro.filtros', compact('parroquias', 'municipios', 'ocupaciones', 'grados', 'categorias'));
    }

    public function mostrarBusqueda()
    {
        return view('admin/registro.buscar'); 
    }

    public function realizarBusqueda(Request $request)
    {
        $registro = Registro::find($request->id);
    
        if ($registro) {
            return redirect()->route('generar.pdf', ['id' => $registro->id]);
        }
    
        return back()->with('status', 'search-not-found')->with('error', 'Registro no encontrado.');
    }
    

}
