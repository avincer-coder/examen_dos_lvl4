<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return response()->json(['ventas' => $ventas], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_venta' => 'required|string',
            'clientes_id' => 'required|integer|exists:clientes,id',
            'trabajadors_id' => 'required|integer|exists:trabajadors,id',
            'fecha' => 'required|date',
            'tipo_comprobante' => 'required|integer',
            'serie' => 'required|integer',
            'correlativo' => 'required|string',
            'igv' => 'required|string',
            'estado' => 'required|string',
        ]);

        $venta = Venta::create($request->all());

        return response()->json(['venta' => $venta], 201);
    }

    public function show(Venta $venta)
    {
        return response()->json(['venta' => $venta], 200);
    }

    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'id_venta' => 'required|string',
            'clientes_id' => 'required|integer|exists:clientes,id',
            'trabajadors_id' => 'required|integer|exists:trabajadors,id',
            'fecha' => 'required|date',
            'tipo_comprobante' => 'required|integer',
            'serie' => 'required|integer',
            'correlativo' => 'required|string',
            'igv' => 'required|string',
            'estado' => 'required|string',
        ]);

        $venta->update($request->all());

        return response()->json(['venta' => $venta], 200);
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();

        return response()->json(null, 204);
    }
}
