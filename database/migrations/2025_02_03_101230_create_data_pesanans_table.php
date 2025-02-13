<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('data_pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('noHp')->unique(); // Gunakan string untuk nomor HP
            $table->integer('total_berat');
            $table->bigInteger('total_harga');
            $table->enum('status', ['Diterima', 'Dicuci', 'Disetrika', 'Selesai', 'Belum Selesai'])->default('Diterima');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_pesanans');
    }
};
