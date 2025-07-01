<?php

namespace App\Http\Controllers;

use App\Models\Puntos;
use Illuminate\Http\Request;

class PuntosController extends Controller
{
    public function index()
    {
        $puntos = Puntos::all();

        return response()->json([
            "Puntos"=> $puntos
        ]);
    }

    public function store(Request $request)
    {
        $punto = Puntos::create([
            'nombre' => $request->input('nombre')
        ]);

        return response()->json([
            'message' => 'Punto registrado.',
            'Punto'=> $punto
        ], 201);
    }
}
