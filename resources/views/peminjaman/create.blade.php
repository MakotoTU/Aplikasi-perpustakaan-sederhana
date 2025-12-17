@extends('layouts.app')

@section('content')
<h2>Catat Peminjaman Baru</h2>
<form action="{{ route('peminjaman.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Pilih Buku</label>
        @if(isset($selectedBuku))
            <input type="text" class="form-control" value="{{ $selectedBuku->judul }}" disabled>
            <input type="hidden" name="buku_id" value="{{ $selectedBuku->id }}">
        @else
            <select name="buku_id" id="select-buku" class="form-select" required>
                <option value="">-- Pilih Buku --</option>
                @foreach($buku as $b)
                    <option value="{{ $b->id }}" @if(isset($selectedBuku) && $selectedBuku->id == $b->id) selected @endif>
                        {{ $b->judul }} (Sisa Stok: {{ $b->stok }})
                    </option>
                @endforeach
            </select>
        @endif
    </div>
    <div class="mb-3">
        <label>Pilih Anggota</label>
        <select name="anggota_id" id="select-anggota" class="form-select" required>
            <option value="">-- Pilih Anggota --</option>
            @foreach($anggota as $a)
                <option value="{{ $a->id }}">{{ $a->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Tanggal Pinjam</label>
        <input type="text" name="tanggal_pinjam" class="form-control flatpickr-date" value="{{ date('Y-m-d') }}" required>
    </div>
    <input type="hidden" name="status" value="dipinjam">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
