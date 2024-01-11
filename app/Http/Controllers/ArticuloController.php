<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $articulos = Articulo::all();
    //     return $articulos;
    // }
    
    public function index()
    {
        $articulos = Articulo::all();
        return response()->json(['articulos' => $articulos], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string',
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'imagen' => 'required|string',
            'id_categoria' => 'required|integer',
            'id_presentacion' => 'required|integer',
        ]);

        $articulo = Articulo::create($request->all());

        return response()->json(['articulo' => $articulo], 201);
    }

    public function show(Articulo $articulo)
    {
        return response()->json(['articulo' => $articulo], 200);
    }

    public function update(Request $request, Articulo $articulo)
    {
        $request->validate([
            'codigo' => 'required|string',
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'imagen' => 'required|string',
            'id_categoria' => 'required|integer',
            'id_presentacion' => 'required|integer',
        ]);

        $articulo->update($request->all());

        return response()->json(['articulo' => $articulo], 200);
    }

    public function destroy(Articulo $articulo)
    {
        $articulo->delete();

        return response()->json(null, 204);
    }
  
}
