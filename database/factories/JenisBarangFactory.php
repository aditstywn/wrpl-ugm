<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisBarang>
 */
class JenisBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_jenis_barang' => mt_rand(1, 3),
            'jenis_barang' => $this->faker->randomElement(['Makanan', 'Minuman', 'Snack']),

        ];
    }
}
