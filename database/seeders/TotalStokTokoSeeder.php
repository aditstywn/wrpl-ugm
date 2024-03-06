<?php

namespace Database\Seeders;

use App\Models\TotalStokToko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TotalStokTokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TotalStokToko::factory(25)->create();
    }
}
