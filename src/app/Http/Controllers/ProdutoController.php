<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $produtos = DB::select('SELECT * FROM produtos');

        return view("produtos.index", ['produtos' => $produtos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|min:3',
            'preco' => 'required|numeric|min:0',
        ]);

        DB::insert('INSERT INTO produtos (nome, preco) VALUES (?, ?)', [$dados['nome'], $dados['preco']]);
        return redirect('/produtos')->with('sucesso', 'Produto criado!');
        // return response()->json(['Mensagem' => 'Produto valido e criado com sucesso', 'dados' => $dados], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    //    else {

        //     abort(404, 'Produto não encontrado');

        $produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);
        if (empty($produto)) abort(404, 'Produto não encontrado');
        return view("produtos.show", ['produto' => $produto[0]]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);
        return view('produtos.edit', ['produto' => $produto[0]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::update('UPDATE produtos SET nome = ?, preco = ? WHERE id = ?', [$request->nome, $request->preco, $id]);
        return redirect('/produtos')->with('sucesso', 'Produto atualizado!');

        // return response()->json(['Mensagem' => 'Produto ' . $id . ' atualizado com sucesso.'], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::delete('DELETE FROM produtos WHERE id = ?', [$id]);
        return redirect('/produtos')->with('sucesso', 'Produto excluído!');
        // return response()->json(['Mensagem' => 'Produto ' . $id . ' removido'], 200);
    }
}
