<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BPBD Kab. Bandung - Sistem LaporBanjir')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar-brand { font-size: 1.3rem; letter-spacing: 0.5px; }
        .card { border-radius: 12px; }
        .btn-custom { border-radius: 8px; font-weight: 600; padding: 10px 20px; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar Utama -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-shield-halved me-2"></i>BPBD Kab. Bandung
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto ms-lg-3">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="{{ route('laporan.create') }}">
                            <i class="fas fa-bullhorn me-1"></i> Form Pelaporan Warga
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    @auth
                        <!-- Menu Petugas Aktif -->
                        <li class="nav-item">
                            <a class="nav-link text-white fw-semibold" href="{{ route('laporan.index') }}">
                                <i class="fas fa-clipboard-list me-1"></i> Kelola Laporan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-semibold" href="{{ route('profile') }}">
                                <i class="fas fa-user-shield me-1"></i> Profil Petugas
                            </a>
                        </li>
                        <li class="nav-item ms-lg-2">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-light btn-sm fw-bold px-3 py-2">
                                    <i class="fas fa-sign-out-alt me-1"></i> Logout ({{ Auth::user()->name }})
                                </button>
                            </form>
                        </li>
                    @else
                        <!-- Menu Tamu -->
                        <li class="nav-item">
                            <a class="nav-link text-white fw-semibold" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt me-1"></i> Login Petugas
                            </a>
                        </li>
                        <li class="nav-item ms-lg-2">
                            <a class="btn btn-light text-danger font-weight-bold px-3 py-2 btn-sm fw-bold" href="{{ route('register') }}">
                                <i class="fas fa-user-plus me-1"></i> Register
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Container -->
    <main class="container my-4 flex-grow-1">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center text-muted py-3 border-top mt-auto shadow-sm">
        <small>© 2026 BPBD Kabupaten Bandung - Sistem Informasi Pelaporan Keadaan Darurat Banjir</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>