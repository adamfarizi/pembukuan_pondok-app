<?php

namespace Database\Seeders;

use App\Models\Santri;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $santriData = [
            [
                'nama_santri' => 'Agus Halim Wijaya',
                'tempat_tanggal_lahir_santri' => 'Tempat, Tanggal Lahir 1',
                'jenis_kelamin_santri' => 'laki-laki',
                'alamat_santri' => 'Alamat Santri 1',
                'no_hp_santri' => '081111111111',
                'email_santri' => 'santri1@example.com',
                'status_santri' => 'menetap',
                'nama_wali_santri' => 'Ahmad Heru',
                'no_hp_wali_santri' => '081222222222',
                'ktp_santri' => $this->generateRandomNumber(16),
                'kk_santri' => $this->generateRandomNumber(16),
                'id_admin' => 1, // Sesuaikan dengan id_admin yang ada di database
            ],
            [
                'nama_santri' => 'Aisyah Fatimah Inaini',
                'tempat_tanggal_lahir_santri' => 'Tempat, Tanggal Lahir 2',
                'jenis_kelamin_santri' => 'perempuan',
                'alamat_santri' => 'Alamat Santri 2',
                'no_hp_santri' => '081333333333',
                'email_santri' => 'santri2@example.com',
                'status_santri' => 'menetap',
                'nama_wali_santri' => 'Satria',
                'no_hp_wali_santri' => '081444444444',
                'ktp_santri' => $this->generateRandomNumber(16),
                'kk_santri' => $this->generateRandomNumber(16),
                'id_admin' => 1, // Sesuaikan dengan id_admin yang ada di database
            ],
            // Tambahkan data santri lainnya sesuai kebutuhan
        ];

        foreach ($santriData as $data) {
            Santri::create($data);
        }
    }

    private function generateRandomNumber($length)
    {
        $number = '';
        for ($i = 0; $i < $length; $i++) {
            $number .= mt_rand(0, 9);
        }
        return $number;
    }
}
