<?php

namespace Database\Seeders;

use App\Models\TotalStokGudang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TotalStokGudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TotalStokGudang::factory(20)->create();
    }
}
