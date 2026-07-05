<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Akademik - Pengujian CI/CD</title>
    <!-- Bootstrap 5 CDN langsung pakai -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar Sederhana -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('jadwal') }}">🎓 Portal Akademik</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ Route::is('jadwal') ? 'active fw-bold text-info' : '' }}" href="{{ route('jadwal') }}">Jadwal Kuliah</a>
                <a class="nav-link {{ Route::is('tugas') ? 'active fw-bold text-info' : '' }}" href="{{ route('tugas') }}">Daftar Tugas</a>
            </div>
        </div>
    </nav>

    <!-- Tempat Isi Konten Halaman -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-muted py-4 mt-5 border-top">
        <p>© 2026 Pengujian CI/CD Pipeline - Sistem Informasi Akademik Sederhana</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>