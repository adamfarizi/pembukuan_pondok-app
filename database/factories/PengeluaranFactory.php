<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengeluaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal_pengeluaran' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'jumlah_pengeluaran' => $this->faker->numberBetween(1000, 99999),
            'deskripsi_pengeluaran' => $this->faker->sentence,
            'nama_pengeluar' => $this->faker->name,
            'id_admin' => 1, // Sesuaikan dengan rentang yang diinginkan
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
