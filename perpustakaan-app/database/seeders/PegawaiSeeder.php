<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class PegawaiSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'pegawai@gmail.com'],
            [
                'name' => 'Pegawai Perpustakaan',
                'password' => Hash::make('pegawai123'),
                'role' => 'pegawai',
                'email_verified_at' => now(),
            ]
        );
    }
}
