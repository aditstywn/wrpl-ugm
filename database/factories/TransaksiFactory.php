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
        static $increment = 0;

        $increment++;
        $kodeTransaksi = 'TRNS' . str_pad($increment, 3, '0', STR_PAD_LEFT);

        return [
            'kode_transaksi' => $kodeTransaksi,
            'user_id' => mt_rand(1, 10),
            'harga_total' => mt_rand(5000, 50000),
            'uang_pembayaran' => mt_rand(10000, 50000),
            'uang_kembalian' => mt_rand(2000, 35000),
        ];
    }
}
