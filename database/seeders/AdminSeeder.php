<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Super Admin',
            'no_hp' => '08123456789',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
