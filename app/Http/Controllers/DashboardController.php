<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {

        $usrCount = Registro::count();

        // Calcular la edad promedio
        $edades = Registro::selectRaw('TIMESTAMPDIFF(YEAR, edad, CURDATE()) as edad')
            ->get()
            ->pluck('edad');

        $promedioEdad = $edades->isNotEmpty() ? number_format($edades->average(), 1) : 0;

        $municipioRepetidoData = Registro::select('municipio')
            ->selectRaw('COUNT(*) as cantidad')
            ->groupBy('municipio')
            ->orderByRaw('cantidad DESC')
            ->limit(1)
            ->first();

        $municipioRepetido = $municipioRepetidoData ? $municipioRepetidoData->municipio : null;
        $cantidadMunicipioRepetido = $municipioRepetidoData ? $municipioRepetidoData->cantidad : 0;

        $categoriaRepetidaData = Registro::select('categoria_p')
            ->selectRaw('COUNT(*) as cantidad')
            ->groupBy('categoria_p')
            ->orderByRaw('cantidad DESC')
            ->limit(1)
            ->first();

        $categoriaRepetido = $categoriaRepetidaData ? $categoriaRepetidaData->categoria_p : null;
        $cantidadCategoriaRepetido = $categoriaRepetidaData ? $categoriaRepetidaData->cantidad : 0;

        $gradoRepetidoData = Registro::select('grado')
            ->selectRaw('COUNT(*) as cantidad')
            ->groupBy('grado')
            ->orderByRaw('cantidad DESC')
            ->limit(1)
            ->first();

        $gradoRepetido = $gradoRepetidoData ? $gradoRepetidoData->grado : null;
        $cantidadGradoRepetido = $gradoRepetidoData ? $gradoRepetidoData->cantidad : 0;

        $resultados = Registro::select('grado', DB::raw('count(*) as total'), DB::raw('(grado) as gd_i'))
            ->groupBy('grado')
            ->orderBy('gd_i')
            ->get();

        $resultados1 = Registro::select('categoria_p', DB::raw('count(*) as total1'), DB::raw('(categoria_p) as cat'))
            ->groupBy('categoria_p')
            ->orderBy('cat')
            ->get();

        return view('admin.dashboard', [
            'usrCount' => $usrCount,
            'promedioEdad' => $promedioEdad,
            'municipioRepetido' => $municipioRepetido,
            'cantidadMunicipioRepetido' => $cantidadMunicipioRepetido,
            'categoriaRepetido' => $categoriaRepetido,
            'cantidadCategoriaRepetido' => $cantidadCategoriaRepetido,
            'gradoRepetido' => $gradoRepetido,
            'cantidadGradoRepetido' => $cantidadGradoRepetido,
            'resultados' => $resultados,
            'resultados1' => $resultados1,

        ]);
    }
}
