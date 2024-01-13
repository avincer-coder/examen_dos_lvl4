<?php

namespace App\Http\Controllers;

use App\Models\Detalle_venta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function index()
    {
        $detallesVentas = Detalle_venta::all();
        return response()->json(['detallesVentas' => $detallesVentas], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ventas_id' => 'required|integer|exists:ventas,id',
            'detalle_ingresos_id' => 'required|integer|exists:detalle_ingresos,id',
            'cantidad' => 'required|integer',
            'precio_venta' => 'required|integer',
            'descuento' => 'required|integer',
        ]);

        $detalleVenta = Detalle_venta::create($request->all());

        return response()->json(['detalleVenta' => $detalleVenta], 201);
    }

    public function show(Detalle_venta $detalleVenta)
    {
        return response()->json(['detalleVenta' => $detalleVenta], 200);
    }

    public function update(Request $request, Detalle_venta $detalleVenta)
    {
        $request->validate([
            'ventas_id' => 'required|integer|exists:ventas,id',
            'detalle_ingresos_id' => 'required|integer|exists:detalle_ingresos,id',
            'cantidad' => 'required|integer',
            'precio_venta' => 'required|integer',
            'descuento' => 'required|integer',
        ]);

        $detalleVenta->update($request->all());

        return response()->json(['detalleVenta' => $detalleVenta], 200);
    }

    public function destroy(Detalle_venta $detalleVenta)
    {
        $detalleVenta->delete();

        return response()->json(null, 204);
    }
}
