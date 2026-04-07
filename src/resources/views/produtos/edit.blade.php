{{-- 1. Indica qual layout usar --}}
@extends('layouts.app')
{{-- 2. Preenche o título da aba do navegador --}}
@section('titulo', 'Editando Produto')
{{-- 3. Preenche a região principal do layout --}}
@section('conteudo')

    <form action="/produtos/{{ $produto->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group mb-3">
            <label for="nome">Nome: </label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome do produto" value=" {{ $produto->nome ?? '' }}"> 
        </div>
        <div class="form-group mb-3">
            <label for="preco">Preço: </label>
            <input type="number" class="form-control" name="preco" placeholder="Digite o preço do produto" value=" {{ $produto->preco ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar produto</button>
    </form>

@endsection