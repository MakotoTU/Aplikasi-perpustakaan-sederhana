@extends('layouts.app')

@section('content')
<h2>Tambah Anggota</h2>
<form action="{{ route('anggota.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama Anggota</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nomor Telepon</label>
        <input type="text" name="nomor_telepon" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
