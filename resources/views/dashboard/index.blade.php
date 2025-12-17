@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Buku</h5>
                <p class="card-text display-4">{{ $total_buku }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Anggota</h5>
                <p class="card-text display-4">{{ $total_anggota }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
            <div class="card-body">
                <h5 class="card-title">Sedang Dipinjam</h5>
                <p class="card-text display-4">{{ $total_peminjaman }}</p>
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    <h3>Selamat Datang di Sistem Perpustakaan Mini</h3>
    <p>Gunakan menu di atas untuk mengelola data Buku, Anggota, dan Transaksi Peminjaman.</p>
</div>
@endsection
