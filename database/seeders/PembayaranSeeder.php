<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembayaranData = [
            [
                'tanggal_pembayaran' => now(),
                'jumlah_pembayaran' => 50000,
                'jenis_pembayaran' => 'daftar_ulang',
                'status_pembayaran' => 'sudah_bayar',
                'id_admin' => 1,
                'id_santri' => 1,
            ],
            [
                'tanggal_pembayaran' => now(),
                'jumlah_pembayaran' => 60000,
                'jenis_pembayaran' => 'iuran_bulanan',
                'status_pembayaran' => 'belum_bayar',
                'id_admin' => 1,
                'id_santri' => 2,
            ],
            [
                'tanggal_pembayaran' => now(),
                'jumlah_pembayaran' => 70000,
                'jenis_pembayaran' => 'tamrin',
                'status_pembayaran' => 'belum_bayar',
                'id_admin' => 1,
                'id_santri' => 1,
            ],
            // Tambahkan data pembayaran lainnya sesuai kebutuhan
            [
                'tanggal_pembayaran' => now(),
                'jumlah_pembayaran' => 80000,
                'jenis_pembayaran' => 'daftar_ulang',
                'status_pembayaran' => 'sudah_bayar',
                'id_admin' => 1,
                'id_santri' => 2,
            ],
            [
                'tanggal_pembayaran' => now(),
                'jumlah_pembayaran' => 90000,
                'jenis_pembayaran' => 'iuran_bulanan',
                'status_pembayaran' => 'sudah_bayar',
                'id_admin' => 1,
                'id_santri' => 1,
            ],
            [
                'tanggal_pembayaran' => now(),
                'jumlah_pembayaran' => 100000,
                'jenis_pembayaran' => 'tamrin',
                'status_pembayaran' => 'sudah_bayar',
                'id_admin' => 1,
                'id_santri' => 2,
            ],
        ];

        foreach ($pembayaranData as $data) {
            Pembayaran::create($data);
        }
    }
}
