@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Buku</h2>
    <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Stok Awal</th>
            <th>Stok Sisa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($buku as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->penulis }}</td>
            <td>{{ $item->tahun_terbit }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->stok - $item->sedang_dipinjam }}</td>
            <td>
                <a href="{{ route('peminjaman.create', ['buku_id' => $item->id]) }}" class="btn btn-sm btn-info text-white">Pinjam</a>
                <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('buku.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
