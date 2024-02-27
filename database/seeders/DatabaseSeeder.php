<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use App\Models\Pengeluaran;
use App\Models\Santri;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            MasterAdminSeeder::class,
            JenisIuranSeeder::class,
            // SantriSeeder::class,
            // PembayaranSeeder::class,
        ]);    

        Santri::factory(1000)->create();
        Pembayaran::factory(100)->create();
        Pengeluaran::factory(50)->create();
    }
}
