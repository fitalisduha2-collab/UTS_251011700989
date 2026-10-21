<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Katalog Snack')</title>

    <link rel="stylesheet"
          href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold"
           href="{{ route('home') }}">
            SnackHouse
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('snacks.index') }}">
                        Katalog Produk
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-5">
    @yield('content')
</main>

<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">
        &copy; {{ date('Y') }} SnackHouse | Katalog Makanan Kering | Fitalis Duha
        (251011700989)
    </p>
</footer>

<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>