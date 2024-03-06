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
        Schema::create('total_stok_gudangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id');
            $table->foreignId('gudang_id');
            $table->integer('total_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('total_stok_gudangs');
    }
};
