@extends('layouts.app')

@section('titulo', 'Filme - ' . $filme->nome)

@section('conteudo')

    <h1>{{ $filme->nome }}</h1>

    <div class="card mb-2">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <p><strong>Duração:</strong> {{ $filme->duracao }} minutos</p>
                <p><strong>Classificação:</strong> {{ $filme->classificacao }}</p>
                <p><strong>Data de lançamento:</strong> {{ $filme->data_lancamento }}</p>

            </div>
        </div>
    </div>

    @foreach ($avaliacoes as $av)
        <div class="card mb-2">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <strong>{{ $av->user->name }}</strong>

                    <span class="badge bg-primary">
                        {{ $av->nota }}/5
                    </span>
                </div>

                <p class="mb-0">
                    {{ $av->descricao }}
                </p>

                <small class="text-muted">
                    {{ $av->created_at->diffForHumans() }}
                </small>
            </div>
        </div>
    @endforeach

@endsection
