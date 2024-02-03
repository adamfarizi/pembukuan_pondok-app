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

        return [
            'tanggal_pembayaran' => $this->faker->dateTimeThisMonth,
            'jumlah_pembayaran' => ($jenisPembayaran == 'daftar_ulang') ? 50000 : $this->faker->numberBetween(1000, 99999),
            'jenis_pembayaran' => $jenisPembayaran,
            'status_pembayaran' => 'sudah_bayar',
            'id_admin' => 1, // Sesuaikan dengan rentang yang diinginkan
            'id_santri' => $this->faker->numberBetween(1, 20), // Sesuaikan dengan id_santri yang ada di database
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
