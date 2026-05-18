<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmeRequest;
use App\Models\Movie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filmes = Movie::orderBy('nome')->get();
        return view("filmes.index", compact("filmes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filmes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmeRequest $request)
    {
        // Se chegou aqui, os dados são válidos
        // $request->validated() retorna só os campos
        // que passaram pelas regras — mais seguro
        // do que $request->all()
        $dados = $request->validated();

        // Remove poster dos dados do Movie
        unset($dados['poster']);

        $filme = Movie::create($dados);

        // Salva o arquivo e obtém o caminho relativo
        // Ex.: 'posters/AbCdEfGhIj1234.jpg'
        if ($request->hasFile('poster')) {
            $caminho = $request->file('poster')
                ->store('posters', 'public');

            // Cria registro na tabela images
            $imagem = Image::create([
                'caminho' => $caminho,
                'nome' => 'Poster de ' . $filme->nome
            ]);

            // Associa imagem ao filme
            $filme->images()->attach($imagem->id);
        }


        return redirect('/filmes')->with('sucesso', 'Filme cadastrado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $filme = Movie::findOrFail($id);
        // Carrega as avaliações com os usuários já incluídos
        $avaliacoes = $filme->reviews()->with('user')->orderBy('created_at', 'desc')->get();
        return view('filmes.show', compact('filme', 'avaliacoes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $filme = Movie::findOrFail($id);
        return view('filmes.edit', compact('filme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    // public function update(UpdateFilmeRequest $request,int $id) {

    //     $filme = Movie::findOrFail($id);
    //     $filme->update($request->validated());
    //     return redirect('/filmes/' . $id)->with('sucesso', 'Filme atualizado!');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
