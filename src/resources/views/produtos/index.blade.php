{{-- 1. Indica qual layout usar --}}
@extends('layouts.app')
{{-- 2. Preenche o título da aba do navegador --}}
@section('titulo', 'Lista de Produtos')
{{-- 3. Preenche a região principal do layout --}}
@section('conteudo')

    <h1 class='mb-4'>Produtos</h1>

    <div class='row g-3'>
        @forelse ($produtos as $produto)
            @include('partials.card-produto', ['produto' => $produto])
        @empty
            <div class='col-12'>
                <div class='alert alert-warning'>
                    Nenhum produto encontrado.
                </div>
            </div>
        @endforelse
    </div>
    
    <br> <br>
    <h5>Número de produtos encontrados: {{$quantProdutos}}</h5>
    <a href='/produtos/create' class='btn btn-primary btn-sm' style="margin-top: 1rem; margin-bottom: 1rem;">
             Cadastrar novo produto
            </a>

@endsection

{{-- 4. Scripts extras apenas nesta página (vai para @stack('scripts')) --}}
@push('scripts')
    <script>console.log('Página de produtos carregada.');</script>
@endpush