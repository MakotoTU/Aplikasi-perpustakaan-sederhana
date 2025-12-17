@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Peminjaman</h2>
    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">Catat Peminjaman</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Buku</th>
            <th>Anggota</th>
            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($peminjaman as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->buku->judul }}</td>
            <td>{{ $item->anggota->nama }}</td>
            <td>{{ $item->tanggal_pinjam->format('d/m/Y') }}</td>
            <td>{{ $item->tanggal_kembali ? $item->tanggal_kembali->format('d/m/Y') : '-' }}</td>
            <td>
                @if($item->status == 'dipinjam')
                    <span class="badge bg-warning">Dipinjam</span>
                @else
                    <span class="badge bg-success">Dikembalikan</span>
                @endif
            </td>
            <td>
                <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-sm btn-info">Proses</a>
                <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data transaksi ini?')">
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
