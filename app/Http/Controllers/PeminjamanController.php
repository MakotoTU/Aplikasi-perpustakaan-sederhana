<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with(['buku', 'anggota'])->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create(Request $request)
    {
        $selectedBuku = null;
        if ($request->has('buku_id')) {
            $selectedBuku = Buku::find($request->buku_id);
        }

        $buku = Buku::where('stok', '>', 0)->get();
        $anggota = Anggota::all();
        return view('peminjaman.create', compact('buku', 'anggota', 'selectedBuku'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required',
            'anggota_id' => 'required',
            'tanggal_pinjam' => 'required|date',
        ]);

        // Kurangi stok buku
        $buku = Buku::find($request->buku_id);
        if($buku->stok > 0) {
            $buku->decrement('stok');
            Peminjaman::create($request->all());
            return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dicatat');
        }

        return back()->with('error', 'Stok buku habis!');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $buku = Buku::all();
        $anggota = Anggota::all();
        return view('peminjaman.edit', compact('peminjaman', 'buku', 'anggota'));
    }

    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        
        // Logika pengembalian buku (tambah stok jika status berubah jadi dikembalikan)
        if ($peminjaman->status == 'dipinjam' && $request->status == 'dikembalikan') {
            $peminjaman->buku->increment('stok');
            $request->merge(['tanggal_kembali' => now()]);
        }

        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman diupdate');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with('success', 'Data dihapus');
    }
}
