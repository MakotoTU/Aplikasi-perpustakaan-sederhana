# 📚 Sistem Informasi Perpustakaan Mini

Aplikasi manajemen perpustakaan sederhana namun modern yang dibangun menggunakan **Laravel 11**. Aplikasi ini dirancang untuk mengelola data buku, anggota, dan transaksi peminjaman dengan antarmuka yang responsif dan user-friendly.

## 🚀 Fitur Unggulan

*   **Manajemen Buku Cerdas**: 
    *   Menampilkan **Stok Awal** dan **Stok Sisa** secara real-time.
    *   Tombol pintas **"Pinjam"** langsung dari daftar buku.
*   **Transaksi Peminjaman**: 
    *   Pencarian data cepat menggunakan **Select2** (Searchable Dropdown).
    *   Format tanggal lokal (DD/MM/YYYY) menggunakan **Flatpickr**.
    *   Logika otomatis: Stok berkurang saat dipinjam, bertambah saat dikembalikan.
*   **UI/UX Modern**: Menggunakan Bootstrap 5 yang terintegrasi lokal (bisa berjalan offline).
*   **Data Dummy**: Dilengkapi *seeder* berisi 20 judul buku *best-seller* nyata dan data anggota.

## 🛠️ Teknologi yang Digunakan

*   **Backend**: Laravel 11
*   **Database**: SQLite
*   **Frontend Tooling**: Vite
*   **CSS Framework**: Bootstrap 5
*   **JavaScript Libraries**: jQuery, Select2, Flatpickr

## 📦 Cara Instalasi & Menjalankan

Ikuti langkah-langkah berikut untuk menjalankan project ini di komputer lokal (Localhost):

### 1. Setup Backend (PHP/Laravel)
Pastikan Composer sudah terinstall.

```bash
# 1. Install dependensi PHP
composer install

# 2. Setup File Environment
copy .env.example .env
# (Pastikan set DB_CONNECTION=sqlite di dalam file .env)

# 3. Generate Application Key
php artisan key:generate
```

### 2. Setup Frontend (Node.js/Vite)
Karena menggunakan Bootstrap lokal dan library JS modern, kita perlu meng-compile asetnya.

```bash
# 1. Install dependensi (Bootstrap, Select2, Flatpickr, dll)
npm install

# 2. Jalankan server development aset (Biarkan terminal ini tetap terbuka)
npm run dev
```

### 3. Setup Database
Perintah ini akan membuat tabel dan mengisinya dengan 20 data buku & anggota.

```bash
php artisan migrate:fresh --seed
```

### 4. Jalankan Aplikasi
Buka terminal baru dan jalankan server Laravel.

```bash
php artisan serve
```

Buka browser dan akses alamat: `http://localhost:8000`

---
*Dibuat untuk tugas Pemrograman Web.*