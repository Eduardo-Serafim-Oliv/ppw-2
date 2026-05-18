@extends('layouts.app')

@section('titulo', 'Criando Filme')

@section('conteudo')

    {{-- enctype="multipart/form-data" é obrigatório para upload
    <form action="/filmes" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror"
                value="{{ old('titulo') }}">
            @error('titulo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="poster" class="form-label">Poster</label>
            <input type="file" name="poster" id="poster" class="form-control @error('poster') is-invalid @enderror"
                accept="image/jpeg,image/png,image/webp">
            @error('poster')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form> --}}



    {{-- ================================================================================================================== --}}

    <style>
        .botao-salvar {

            background-color: white
        }


        .botao-salvar:hover {

            background-color: black;
        }
    </style>

    <form action="/filmes" method="POST" enctype="multipart/form-data"
        style="background-color:#a0d6fa;  margin: 5% 25% 5% 25%; padding: 1rem; border-radius: 10px">
        @csrf
        <div class="form-group mb-2">
            <label for="nome">
                <h6>Título do Filme</h6>
            </label>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                class="form-control @error('nome') is-invalid @enderror" placeholder="Digite o título do filme...">
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="duracao">
                <h6>Duração</h6>
            </label>
            <input type="number" name="duracao" id="duracao" value="{{ old('duracao') }}"
                class="form-control @error('duracao') is-invalid @enderror"
                placeholder="Digite a duração do filme em minutos...">
            @error('duracao')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="data_lancamento">
                <h6>Data de Lançamento</h6>
            </label>
            <input type="date" name="data_lancamento" id="data_lancamento" value="{{ old('data_lancamento') }}"
                class="form-control @error('data_lancamento') is-invalid @enderror"
                placeholder="Selecione a data de lançamento do filme...">
            @error('data_lancamento')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="classificacao">
                <h6>Classificação</h6>
            </label>
            <input type="text" name="classificacao" id="classificacao" value="{{ old('classificacao') }}"
                class="form-control @error('classificacao') is-invalid @enderror"
                placeholder="Digite a Classificação Indicativa do filme...">
            @error('classificacao')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="sinopse">
                <h6>Sinopse</h6>
            </label>
            <textarea name="sinopse" id="sinopse" value="{{ old('sinopse') }}"
                class="form-control @error('sinopse') is-invalid @enderror" placeholder="Escreva a sinopse do filme..."
                cols="30" rows="5">
            </textarea>
            @error('sinopse')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="poster" class="form-label">
                <h6>Poster</h6>
            </label>
            <input type="file" name="poster" id="poster" value="{{ old('poster') }}"
                class="form-control @error('poster') is-invalid @enderror" accept="image/jpeg,image/png,image/webp">
            @error('poster')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex justify-content-center" style="border-top: solid 0.5px white; padding-top: 2%">
            <button type="submit" class="botao-salvar btn btn-outline-dark">Salvar</button>
        </div>
    </form>

@endsection
