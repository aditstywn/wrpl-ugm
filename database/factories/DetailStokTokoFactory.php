<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailStokToko>
 */
class DetailStokTokoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'stok_toko_id' => mt_rand(1, 10),
            'total_stok_gudang_id' => mt_rand(1, 20),
            'stok' => mt_rand(1, 27),
        ];
    }
}
