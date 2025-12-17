@extends('layouts.app')

@section('content')
<h2>Update Status Peminjaman</h2>
<form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label>Buku</label>
        <input type="text" class="form-control" value="{{ $peminjaman->buku->judul }}" disabled>
        <input type="hidden" name="buku_id" value="{{ $peminjaman->buku_id }}">
    </div>

    <div class="mb-3">
        <label>Anggota</label>
        <input type="text" class="form-control" value="{{ $peminjaman->anggota->nama }}" disabled>
        <input type="hidden" name="anggota_id" value="{{ $peminjaman->anggota_id }}">
    </div>

    <div class="mb-3">
        <label>Tanggal Pinjam</label>
        <input type="text" name="tanggal_pinjam" class="form-control flatpickr-date" value="{{ $peminjaman->tanggal_pinjam->format('Y-m-d') }}" readonly>
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-select">
            <option value="dipinjam" {{ $peminjaman->status == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
            <option value="dikembalikan" {{ $peminjaman->status == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
        </select>
        <small class="text-muted">Ubah ke "Dikembalikan" untuk mengembalikan stok buku.</small>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
