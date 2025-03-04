<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Projeto Atleta')</title>

    <!-- Importando CSS do Marble -->
    <link rel="stylesheet" href="{{ asset('marble/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marble/css/style.css') }}">

    @stack('styles')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Projeto Atleta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/people') }}">Pessoas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/competitions') }}">Competições</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/sports') }}">Esportes</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Importando JS do Marble -->
    <script src="{{ asset('marble/js/jquery.min.js') }}"></script>
    <script src="{{ asset('marble/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')

</body>
</html>
