<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-md-5">

                <!-- Logo -->
                <div class="text-center mb-4">
                    <a href="/">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="80">
                    </a>
                </div>

                <!-- Card -->
                <div class="card shadow">
                    <div class="card-body">
                        {{ $slot }}
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
