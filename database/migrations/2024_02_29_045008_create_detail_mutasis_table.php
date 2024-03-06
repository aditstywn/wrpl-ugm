<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_mutasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mutasi_id');
            $table->foreignId('total_stok_gudang_id');
            $table->foreignId('gudang_awal_id');
            $table->foreignId('gudang_tujuan_id');
            $table->integer('jumlah_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_mutasis');
    }
};
