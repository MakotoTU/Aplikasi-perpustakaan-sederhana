@extends('layouts.app')

@section('content')
<h2>Tambah Buku</h2>
<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Judul Buku</label>
        <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
