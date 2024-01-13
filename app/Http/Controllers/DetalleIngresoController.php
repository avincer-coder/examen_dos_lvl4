<?php

namespace App\Http\Controllers;

use App\Models\Detalle_ingreso;
use Illuminate\Http\Request;

class DetalleIngresoController extends Controller
{
    public function index()
    {
        $detallesIngreso = Detalle_ingreso::all();
        return response()->json(['detallesIngreso' => $detallesIngreso], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_ingreso' => 'required|string',
            'articulos_id' => 'required|integer|exists:articulos,id',
            'precio_compra' => 'required|string',
            'precio_venta' => 'required|string',
            'stock_inicial' => 'required|string',
            'stock_actual' => 'required|string',
            'fecha_produccion' => 'required|date',
            'fecha_vencimiento' => 'required|date',
        ]);

        $detalleIngreso = Detalle_ingreso::create($request->all());

        return response()->json(['detalleIngreso' => $detalleIngreso], 201);
    }

    public function show(Detalle_ingreso $detalleIngreso)
    {
        return response()->json(['detalleIngreso' => $detalleIngreso], 200);
    }

    public function update(Request $request, Detalle_ingreso $detalleIngreso)
    {
        $request->validate([
            'id_ingreso' => 'required|string',
            'articulos_id' => 'required|integer|exists:articulos,id',
            'precio_compra' => 'required|string',
            'precio_venta' => 'required|string',
            'stock_inicial' => 'required|string',
            'stock_actual' => 'required|string',
            'fecha_produccion' => 'required|date',
            'fecha_vencimiento' => 'required|date',
        ]);

        $detalleIngreso->update($request->all());

        return response()->json(['detalleIngreso' => $detalleIngreso], 200);
    }

    public function destroy(Detalle_ingreso $detalleIngreso)
    {
        $detalleIngreso->delete();

        return response()->json(null, 204);
    }
}
