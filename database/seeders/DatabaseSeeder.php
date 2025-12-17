<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data Curated Buku (Nyata & Populer)
        $bukuData = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun_terbit' => 2005, 'stok' => 5],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun_terbit' => 1980, 'stok' => 4],
            ['judul' => 'Cantik Itu Luka', 'penulis' => 'Eka Kurniawan', 'tahun_terbit' => 2002, 'stok' => 3],
            ['judul' => 'Pulang', 'penulis' => 'Leila S. Chudori', 'tahun_terbit' => 2012, 'stok' => 4],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun_terbit' => 2009, 'stok' => 5],
            ['judul' => 'Dilan: Dia adalah Dilanku Tahun 1990', 'penulis' => 'Pidi Baiq', 'tahun_terbit' => 2014, 'stok' => 6],
            ['judul' => 'Perahu Kertas', 'penulis' => 'Dee Lestari', 'tahun_terbit' => 2009, 'stok' => 3],
            ['judul' => 'Ronggeng Dukuh Paruk', 'penulis' => 'Ahmad Tohari', 'tahun_terbit' => 1982, 'stok' => 2],
            ['judul' => 'Saman', 'penulis' => 'Ayu Utami', 'tahun_terbit' => 1998, 'stok' => 2],
            ['judul' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'penulis' => 'Dee Lestari', 'tahun_terbit' => 2001, 'stok' => 3],
            ['judul' => 'Clean Code', 'penulis' => 'Robert C. Martin', 'tahun_terbit' => 2008, 'stok' => 5],
            ['judul' => 'The Pragmatic Programmer', 'penulis' => 'Andrew Hunt & David Thomas', 'tahun_terbit' => 1999, 'stok' => 4],
            ['judul' => 'Harry Potter dan Batu Bertuah', 'penulis' => 'J.K. Rowling', 'tahun_terbit' => 1997, 'stok' => 7],
            ['judul' => 'Harry Potter dan Kamar Rahasia', 'penulis' => 'J.K. Rowling', 'tahun_terbit' => 1998, 'stok' => 6],
            ['judul' => 'Sherlock Holmes: A Study in Scarlet', 'penulis' => 'Arthur Conan Doyle', 'tahun_terbit' => 1887, 'stok' => 3],
            ['judul' => 'The Lord of the Rings: The Fellowship of the Ring', 'penulis' => 'J.R.R. Tolkien', 'tahun_terbit' => 1954, 'stok' => 4],
            ['judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'tahun_terbit' => 2018, 'stok' => 8],
            ['judul' => 'Atomic Habits', 'penulis' => 'James Clear', 'tahun_terbit' => 2018, 'stok' => 10],
            ['judul' => 'Sapiens: A Brief History of Humankind', 'penulis' => 'Yuval Noah Harari', 'tahun_terbit' => 2011, 'stok' => 6],
            ['judul' => 'Belajar Laravel 11', 'penulis' => 'Taylor Otwell', 'tahun_terbit' => 2024, 'stok' => 5],
        ];

        foreach ($bukuData as $data) {
            Buku::create($data);
        }

        // 2. Data Curated Anggota (Nama Indonesia Wajar)
        $anggotaData = [
            ['nama' => 'Budi Santoso', 'nomor_telepon' => '081234567801', 'alamat' => 'Jl. Merdeka No. 10'],
            ['nama' => 'Siti Aminah', 'nomor_telepon' => '081234567802', 'alamat' => 'Jl. Kebon Jeruk No. 5'],
            ['nama' => 'Agus Setiawan', 'nomor_telepon' => '081234567803', 'alamat' => 'Jl. Diponegoro No. 12'],
            ['nama' => 'Rina Marlina', 'nomor_telepon' => '081234567804', 'alamat' => 'Jl. Mawar No. 3'],
            ['nama' => 'Dewi Sartika', 'nomor_telepon' => '081234567805', 'alamat' => 'Jl. Anggrek No. 8'],
            ['nama' => 'Eko Prasetyo', 'nomor_telepon' => '081234567806', 'alamat' => 'Jl. Melati No. 2'],
            ['nama' => 'Fajar Nugroho', 'nomor_telepon' => '081234567807', 'alamat' => 'Jl. Kenanga No. 7'],
            ['nama' => 'Gita Permata', 'nomor_telepon' => '081234567808', 'alamat' => 'Jl. Cempaka No. 1'],
            ['nama' => 'Hendra Wijaya', 'nomor_telepon' => '081234567809', 'alamat' => 'Jl. Flamboyan No. 4'],
            ['nama' => 'Indah Puspita', 'nomor_telepon' => '081234567810', 'alamat' => 'Jl. Dahlia No. 6'],
            ['nama' => 'Joko Susilo', 'nomor_telepon' => '081234567811', 'alamat' => 'Jl. Teratai No. 9'],
            ['nama' => 'Kartika Sari', 'nomor_telepon' => '081234567812', 'alamat' => 'Jl. Seroja No. 11'],
            ['nama' => 'Lestari Wulandari', 'nomor_telepon' => '081234567813', 'alamat' => 'Jl. Kamboja No. 15'],
            ['nama' => 'Muhammad Rizky', 'nomor_telepon' => '081234567814', 'alamat' => 'Jl. Bougenville No. 14'],
            ['nama' => 'Nurul Hidayah', 'nomor_telepon' => '081234567815', 'alamat' => 'Jl. Alamanda No. 13'],
            ['nama' => 'Oki Saputra', 'nomor_telepon' => '081234567816', 'alamat' => 'Jl. Tulip No. 16'],
            ['nama' => 'Putri Ayu', 'nomor_telepon' => '081234567817', 'alamat' => 'Jl. Bakung No. 17'],
            ['nama' => 'Rahmat Hidayat', 'nomor_telepon' => '081234567818', 'alamat' => 'Jl. Lily No. 18'],
            ['nama' => 'Sri Wahyuni', 'nomor_telepon' => '081234567819', 'alamat' => 'Jl. Amarilis No. 19'],
            ['nama' => 'Tono Hartono', 'nomor_telepon' => '081234567820', 'alamat' => 'Jl. Sakura No. 20'],
        ];

        foreach ($anggotaData as $data) {
            Anggota::create($data);
        }

        // 3. Data Transaksi Peminjaman (Sample)
        // Menggunakan ID 1-5 untuk sample
        Peminjaman::create(['buku_id' => 1, 'anggota_id' => 1, 'tanggal_pinjam' => '2024-01-01', 'status' => 'dipinjam']);
        Peminjaman::create(['buku_id' => 2, 'anggota_id' => 2, 'tanggal_pinjam' => '2024-01-02', 'status' => 'dipinjam']);
        Peminjaman::create(['buku_id' => 3, 'anggota_id' => 3, 'tanggal_pinjam' => '2024-01-03', 'tanggal_kembali' => '2024-01-10', 'status' => 'dikembalikan']);
        Peminjaman::create(['buku_id' => 4, 'anggota_id' => 4, 'tanggal_pinjam' => '2024-01-04', 'status' => 'dipinjam']);
        Peminjaman::create(['buku_id' => 5, 'anggota_id' => 5, 'tanggal_pinjam' => '2024-01-05', 'status' => 'dipinjam']);
    }
}