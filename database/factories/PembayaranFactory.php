<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jenisPembayaran = $this->faker->randomElement(['daftar_ulang', 'iuran_bulanan', 'tamrin']);

        $jumlahPembayaran = 0;
        $jenisIuran = null; // Inisialisasi variabel jenisIuran di luar blok if

        if ($jenisPembayaran == 'tamrin') {
            $jumlahPembayaran = 80000;
        } elseif ($jenisPembayaran == 'daftar_ulang') {
            $jumlahPembayaran = 50000;
        } elseif ($jenisPembayaran == 'iuran_bulanan') {
            $jenisIuran = $this->faker->randomElement([1, 2, 3, 4, 5, 6]);
            if ($jenisIuran == 1) {
                $jumlahPembayaran = 50000;
            } elseif ($jenisIuran == 2 || $jenisIuran == 3) {
                $jumlahPembayaran = 20000;
            } elseif ($jenisIuran == 4) {
                $jumlahPembayaran = 150000;
            } else {
                $jumlahPembayaran = 50000;
            }
        } else {
            $jumlahPembayaran = $this->faker->numberBetween(1000, 99999);
        }

        return [
            'tanggal_pembayaran' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'jumlah_pembayaran' => $jumlahPembayaran,
            'jenis_pembayaran' => $jenisPembayaran,
            'id_jenis_iuran' => ($jenisPembayaran == 'iuran_bulanan') ? $jenisIuran : null,
            'status_pembayaran' => 'lunas',
            'id_admin' => 1, 
            'id_santri' => $this->faker->numberBetween(1, 60),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];


    }
}
