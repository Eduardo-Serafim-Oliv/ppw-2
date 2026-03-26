<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([

            ['id' => '1', 'Nome' => 'Tablet', 'Preço' => 'R$ 200'],
            ['id' => '2', 'Nome' => 'Celular', 'Preço' => 'R$ 1500'],
            ['id' => '3', 'Nome' => 'TV', 'Preço' => 'R$ 2450']

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json(['Mensagem' => 'Produto criado com sucesso'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(['id' => $id, 'Nome' => 'Produto ' . $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json(['Mensagem' => 'Produto ' . $id . ' atualizado com sucesso.'], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json(['Mensagem' => 'Produto ' . $id . ' removido'], 200);
    }
}
