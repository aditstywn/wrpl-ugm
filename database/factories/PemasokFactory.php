<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemasok>
 */
class PemasokFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_pemasok' => mt_rand(20, 30),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'no_telepon' => mt_rand(6218, 92826),
        ];
    }
}
