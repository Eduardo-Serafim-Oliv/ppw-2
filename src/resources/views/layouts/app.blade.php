<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>@yield('titulo', 'Meu Sistema')</title>
    {{-- Bootstrap CSS via CDN --}}
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>

    {{-- Estilos específicos de cada página (opcional) --}}
    @stack('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produtos/create">Criar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        {{-- Aqui será inserido o conteúdo de cada página --}}
        @yield('conteudo')
    </main>
    <footer>
        
        <p>&copy; {{ date('Y') }} Meu Sistema</p>

    </footer>
    {{-- Scripts específicos de cada página (opcional) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @stack('scripts')
</body>

</html>