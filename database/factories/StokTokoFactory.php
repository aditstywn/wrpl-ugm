<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StokToko>
 */
class StokTokoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $increment = 0;

        $increment++;
        $kodeSuratJalan = 'SRJLN' . str_pad($increment, 4, '0', STR_PAD_LEFT);

        return [
            'kode_surat_jalan' => $kodeSuratJalan,
            'toko_id' => mt_rand(1, 10),
        ];
    }
}
