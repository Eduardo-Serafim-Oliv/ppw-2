@extends('layouts.app')

@section('titulo', 'Lista de Filmes')

@section('conteudo')


    <h1 class='mb-4'>Filmes</h1>

    <div class='row g-3'>
        @forelse ($filmes as $filme)
            <div class="card mb-2">
                <div class="card-body">
                    <h3>{{ $filme->nome }}</h3>
                    <div class="d-flex justify-content-between">
                        <p><strong>Duração:</strong> {{ $filme->duracao }} minutos</p>
                        <p><strong>Classificação:</strong> {{ $filme->classificacao }}</p>
                        <p><strong>Data de lançamento:</strong>
                            {{ \Carbon\Carbon::parse($filme->data_lancamento)->format('d/m/Y') }}</p>
                        {{-- <img src="{{ asset('storage/' . $image->caminho) }}"> --}}
                    </div>
                </div>
            </div>
        @empty
            <div class='col-12'>
                <div class='alert alert-warning'>
                    Nenhum filme encontrado.
                </div>
            </div>
        @endforelse
    </div>

@endsection
