<?php

namespace Database\Seeders;

use App\Models\DetailStokToko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailStokTokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailStokToko::factory(15)->create();
    }
}
