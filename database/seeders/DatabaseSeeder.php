<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
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
            // SantriSeeder::class,
            // PembayaranSeeder::class,
        ]);    

        Santri::factory(20)->create();
        Pembayaran::factory(50)->create();
    }
}
