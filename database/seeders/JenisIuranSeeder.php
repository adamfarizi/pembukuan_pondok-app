<?php

namespace Database\Seeders;

use App\Models\JenisIuran;
use Illuminate\Database\Seeder;

class JenisIuranSeeder extends Seeder
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
                'jenis_iuran' => 'Syariah',
                'pembayaran_jenis_iuran' => 50000,
            ],
            [
                'jenis_iuran' => 'Listrik',
                'pembayaran_jenis_iuran' => 20000,
            ],
            [
                'jenis_iuran' => 'T.Haflah',
                'pembayaran_jenis_iuran' => 20000,
            ],
            [
                'jenis_iuran' => 'Makan',
                'pembayaran_jenis_iuran' => 150000,
            ],
            [
                'jenis_iuran' => 'Transport',
                'pembayaran_jenis_iuran' => 50000,
            ],
            [
                'jenis_iuran' => 'T.Ziarah',
                'pembayaran_jenis_iuran' => 50000,
            ],
        ];

        foreach ($masteradminsData as $data) {
            JenisIuran::create($data);
        }
    }
}
