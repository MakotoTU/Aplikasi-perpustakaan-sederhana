@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Anggota</h2>
    <a href="{{ route('anggota.create') }}" class="btn btn-primary">Tambah Anggota</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No. Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($anggota as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nomor_telepon }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('anggota.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
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
