@extends('layouts.app')

@section('content')
<h2>Edit Anggota</h2>
<form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nama Anggota</label>
        <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}" required>
    </div>
    <div class="mb-3">
        <label>Nomor Telepon</label>
        <input type="text" name="nomor_telepon" class="form-control" value="{{ $anggota->nomor_telepon }}" required>
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="3" required>{{ $anggota->alamat }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
