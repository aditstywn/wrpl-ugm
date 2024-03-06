<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailMutasi>
 */
class DetailMutasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mutasi_id' => mt_rand(1, 15),
            'total_stok_gudang_id' => mt_rand(1, 20),
            'gudang_awal_id' => mt_rand(1, 5),
            'gudang_tujuan_id' => mt_rand(1, 5),
            'jumlah_barang' => mt_rand(1, 15),
        ];
    }
}
