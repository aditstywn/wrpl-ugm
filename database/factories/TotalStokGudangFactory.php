<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TotalStokGudang>
 */
class TotalStokGudangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barang_id' => mt_rand(1, 25),
            'gudang_id' => mt_rand(1, 5),
            'total_Stock' => mt_rand(10, 35),

        ];
    }
}
