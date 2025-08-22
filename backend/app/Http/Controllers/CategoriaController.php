<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return response()->json(Categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'nullable'

        ]);

        $categoria=Categoria::create($request->all());
        return response()->json([
            'mensaje '=>'categoria creada exitosamente',
            'categoria'=> $categoria

        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categoria=Categoria::find($id);
        if(!$categoria){
            return response ()->json(
                [
                    'mensaje'=>'categoria no encontrada'
                ]
                );
        }
        return response()->json($categoria,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
