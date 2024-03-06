<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailTransaksi>
 */
class DetailTransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaksi_id' => mt_rand(1, 100),
            'total_stok_toko_id' => mt_rand(1, 25),
            'jumlah_pembelian' => mt_rand(1, 10),
            'total' => mt_rand(10, 20),
        ];
    }
}
