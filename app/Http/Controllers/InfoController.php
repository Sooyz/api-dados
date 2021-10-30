<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\{Total, Detalle, Matricula};

class InfoController extends Controller
{
    public function index()
    {

        return response()->json(Total::all());

    }

    public function show(Request $request)
    {
        //Articulo
        $articulo = $request->id;
        return response()->json(DB::table('detalles')
        ->join('matriculas', 'detalles.id', '=', 'matriculas.id')
        ->where('detalles.articulo', $articulo)
        ->get());


    }
}
