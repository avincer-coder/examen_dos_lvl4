<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json(['clientes' => $clientes], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'sexo' => 'required|string',
            'fecha_nacimiento' => 'required|string',
            'tipo_documento' => 'required|string',
            'num_documento' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|email',
        ]);

        $cliente = Cliente::create($request->all());

        return response()->json(['cliente' => $cliente], 201);
    }

    public function show(Cliente $cliente)
    {
        return response()->json(['cliente' => $cliente], 200);
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'sexo' => 'required|string',
            'fecha_nacimiento' => 'required|string',
            'tipo_documento' => 'required|string',
            'num_documento' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|email',
        ]);

        $cliente->update($request->all());

        return response()->json(['cliente' => $cliente], 200);
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return response()->json(null, 204);
    }
}
