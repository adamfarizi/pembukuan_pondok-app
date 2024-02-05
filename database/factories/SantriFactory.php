<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_santri' => $this->faker->name,
            'tempat_tanggal_lahir_santri' => $this->faker->city . ', ' . $this->faker->date,
            'jenis_kelamin_santri' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'alamat_santri' => $this->faker->address,
            'no_hp_santri' => $this->faker->numerify('###########'), // 13 digit random numeric
            'email_santri' => $this->faker->unique()->safeEmail,
            'status_santri' => $this->faker->randomElement(['menetap', 'pulang']),
            'nama_wali_santri' => $this->faker->name,
            'no_hp_wali_santri' => $this->faker->numerify('###########'), // 13 digit random numeric
            'ktp_santri' => 'ktp.png',
            'kk_santri' => 'kk.png',
            'id_admin' => 1, // Sesuaikan dengan rentang yang diinginkan
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
