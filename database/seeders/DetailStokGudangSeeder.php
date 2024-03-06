<?php

namespace Database\Seeders;

use App\Models\DetailStokGudang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailStokGudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailStokGudang::factory(10)->create();
    }
}
