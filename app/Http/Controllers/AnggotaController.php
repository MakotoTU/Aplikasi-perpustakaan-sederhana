<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
        ]);

        Anggota::create($request->all());
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan');
    }

    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->update($request->all());
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diupdate');
    }

    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus');
    }
}