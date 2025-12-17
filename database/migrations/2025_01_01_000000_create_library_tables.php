<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->integer('tahun_terbit');
            $table->integer('stok');
            $table->timestamps();
        });

        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_telepon');
            $table->text('alamat');
            $table->timestamps();
        });

        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buku_id')->constrained('buku')->onDelete('cascade');
            $table->foreignId('anggota_id')->constrained('anggota')->onDelete('cascade');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();
            $table->enum('status', ['dipinjam', 'dikembalikan'])->default('dipinjam');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
        Schema::dropIfExists('anggota');
        Schema::dropIfExists('buku');
    }
};
