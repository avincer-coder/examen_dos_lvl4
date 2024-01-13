<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    public function index()
    {
        $trabajadores = Trabajador::all();
        return response()->json(['trabajadores' => $trabajadores], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'sexo' => 'required|string',
            'fecha_nacimiento' => 'required|string',
            'num_documento' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|email',
            'acceso' => 'required|string',
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);

        $trabajador = Trabajador::create($request->all());

        return response()->json(['trabajador' => $trabajador], 201);
    }

    public function show(Trabajador $trabajador)
    {
        return response()->json(['trabajador' => $trabajador], 200);
    }

    public function update(Request $request, Trabajador $trabajador)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'sexo' => 'required|string',
            'fecha_nacimiento' => 'required|string',
            'num_documento' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|email',
            'acceso' => 'required|string',
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);

        $trabajador->update($request->all());

        return response()->json(['trabajador' => $trabajador], 200);
    }

    public function destroy(Trabajador $trabajador)
    {
        $trabajador->delete();

        return response()->json(null, 204);
    }
}
