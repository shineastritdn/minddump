<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'MindDump') - Jurnal Digital Anonim</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-blue: #0047FF;
            --secondary-gray: #E5E5E5;
            --dark-text: #1A1A1A;
            --light-text: #FFFFFF;
            --accent-yellow: #FFFF00;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: white;
            color: var(--dark-text);
        }

        .navbar {
            background-color: white !important;
            padding: 1rem 0;
        }

        .navbar-brand {
            color: var(--primary-blue) !important;
            font-weight: 700;
            font-size: 1.2rem;
            letter-spacing: -0.5px;
        }

        .nav-link {
            color: var(--dark-text) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.9rem;
            letter-spacing: -0.3px;
        }

        .nav-link:hover, .nav-link.active {
            background-color: var(--primary-blue);
            color: var(--light-text) !important;
        }

        .btn {
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 500;
            letter-spacing: -0.3px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: var(--primary-blue);
            border: none;
            color: var(--light-text);
        }

        .btn-primary:hover {
            background-color: #0037CC;
            transform: translateY(-2px);
        }

        .btn-outline-primary {
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
            background-color: transparent;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-blue);
            color: var(--light-text);
            transform: translateY(-2px);
        }

        .highlight-text {
            color: var(--primary-blue);
        }
    </style>
</head>
<body>
    @include('layouts.header')
    
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
