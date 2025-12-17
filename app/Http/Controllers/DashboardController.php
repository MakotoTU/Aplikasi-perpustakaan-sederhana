<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        $total_buku = Buku::count();
        $total_anggota = Anggota::count();
        $total_peminjaman = Peminjaman::where('status', 'dipinjam')->count();

        return view('dashboard.index', compact('total_buku', 'total_anggota', 'total_peminjaman'));
    }
}
