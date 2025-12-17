<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Perpus Mini</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { display: flex; align-items: center; justify-content: center; height: 100vh; background-color: #f8f9fa; }
        .card { width: 400px; padding: 20px; }
    </style>
</head>
<body>
    <div class="card shadow text-center">
        <h3>Perpustakaan Mini</h3>
        <p class="text-muted">Tugas Akhir Pemrograman Web</p>
        <hr>
        <p>Silakan masuk untuk mengelola data.</p>
        <a href="{{ route('dashboard') }}" class="btn btn-primary w-100">Masuk sebagai Admin</a>
    </div>
</body>
</html>