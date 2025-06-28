<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .banner {
            background-color: var(--secondary-gray);
            padding: 5rem 0;
            position: relative;
        }

        .banner h1 {
            font-size: 4rem;
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -1px;
            margin-bottom: 1.5rem;
        }

        .banner p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
            letter-spacing: -0.3px;
        }

        .stats-box {
            background-color: var(--primary-blue);
            color: var(--light-text);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
        }

        .stats-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -1px;
        }

        .stats-label {
            font-size: 1rem;
            opacity: 0.9;
            letter-spacing: -0.3px;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: var(--primary-blue);
            color: var(--light-text);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            color: #666;
            font-size: 1.1rem;
            letter-spacing: -0.3px;
        }

        .card {
            border: none;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .highlight-text {
            color: var(--primary-blue);
        }

        .accent-bg {
            background-color: var(--accent-yellow);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">
                <i class="fas fa-book me-2"></i>Mind<span class="highlight-text">Dump</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}" 
                           href="{{ route('welcome') }}">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link {{ request()->routeIs('journals.create') ? 'active' : '' }}" 
                           href="{{ route('journals.create') }}">
                            Tulis
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('journals.index') ? 'active' : '' }}" 
                           href="{{ route('journals.index') }}">
                            Jelajahi
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if(Auth::user()->profile_photo)
                                    <img src="{{ Storage::url('profile-photos/' . Auth::user()->profile_photo) }}" 
                                         alt="Profile Photo" 
                                         class="rounded-circle me-2"
                                         style="width: 32px; height: 32px; object-fit: cover;">
                                @else
                                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center me-2"
                                         style="width: 32px; height: 32px;">
                                        <i class="fas fa-user text-white"></i>
                                    </div>
                                @endif
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item py-2" href="{{ route('profile.edit') }}">
                                        <i class="fas fa-user-edit me-2 text-primary"></i>Edit Profile
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item py-2 text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt me-2"></i>Keluar
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row py-4 align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <span class="badge bg-light text-primary mb-3">MindDump 2025</span>
                        <h1 class="display-4 fw-bold mb-3" style="letter-spacing: -1px;">Tuangkan Pikiranmu<br>Tanpa Batas</h1>
                        <p class="lead mb-4 text-muted" style="letter-spacing: -0.3px;">Platform jurnal digital yang memungkinkan kamu menulis<br>dan berbagi cerita secara anonim</p>
                        <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                            <a href="{{ route('journals.create') }}" class="btn btn-primary">
                                Mulai Menulis
                            </a>
                            <a href="{{ route('journals.index') }}" class="btn btn-outline-primary">
                                Jelajahi
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="position-relative">
                            <!-- Main Image -->
                            <img src="{{ asset('images/brain.jpg') }}" alt="Menulis Jurnal" 
                                 class="img-fluid rounded-4 shadow-lg" 
                                 style="width: 100%; height: auto; object-fit: cover;">
                            
                            <!-- Floating Elements -->
                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <div class="bg-white rounded-circle shadow-sm p-3">
                                    <i class="fas fa-pen text-primary fa-2x"></i>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 start-0 mb-3 ms-3">
                                <div class="bg-primary text-white rounded-pill shadow-sm px-4 py-2">
                                    <i class="fas fa-lock me-2"></i>100% Anonim
                                </div>
                            </div>
                            <div class="position-absolute top-50 start-0 translate-middle">
                                <div class="bg-white rounded-3 shadow-sm p-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-users text-primary me-2"></i>
                                        <span>5000+ Pengguna</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Inisialisasi semua dropdown menu
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
            var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
                return new bootstrap.Dropdown(dropdownToggleEl);
            });
        });
    </script>
</body>
</html> 