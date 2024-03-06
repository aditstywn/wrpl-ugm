<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_transaksi' => mt_rand(80, 100),
            'user_id' => mt_rand(1, 10),
            'harga_total' => mt_rand(5000, 50000),
            'uang_pembayaran' => mt_rand(10000, 50000),
            'uang_kembalian' => mt_rand(2000, 35000),
        ];
    }
}
