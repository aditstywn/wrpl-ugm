<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([

            UserRoleSeeder::class,
            BarangSeeder::class,
            JenisBarangSeeder::class,
            TokoSeeder::class,
            GudangSeeder::class,
            PemasokSeeder::class,
            StokTokoSeeder::class,
            TotalStokGudangSeeder::class,
            TotalStokTokoSeeder::class,
            MutasiSeeder::class,
            DetailMutasiSeeder::class,
            DetailStokGudangSeeder::class,
            DetailStokTokoSeeder::class,
            TransaksiSeeder::class,
            DetailTransaksiSeeder::class,
        ]);
    }
}
