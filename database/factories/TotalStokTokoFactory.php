<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TotalStokToko>
 */
class TotalStokTokoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'total_stok_gudang_id' => mt_rand(1, 20),
            'toko_id' => mt_rand(1, 10),
            'total_stok' => mt_rand(10, 56),
        ];
    }
}
