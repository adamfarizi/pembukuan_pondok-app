<?php

namespace Database\Seeders;

use App\Models\MasterAdmin;
use Illuminate\Database\Seeder;

class MasterAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masteradminsData = [
            [
                'pembayaran_daftar_ulang' => 50000,
                'pembayaran_tamrin' => 80000,
            ],
        ];

        foreach ($masteradminsData as $data) {
            MasterAdmin::create($data);
        }
    }
}
