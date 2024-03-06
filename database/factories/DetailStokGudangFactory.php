<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailStokGudang>
 */
class DetailStokGudangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gudang_id' => mt_rand(1, 5),
            'barang_id' => mt_rand(1, 25),
            'stok' => mt_rand(10, 25),
        ];
    }
}
