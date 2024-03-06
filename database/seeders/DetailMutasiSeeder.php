<?php

namespace Database\Seeders;

use App\Models\DetailMutasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailMutasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailMutasi::factory(15)->create();
    }
}
