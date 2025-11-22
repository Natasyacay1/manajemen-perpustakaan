<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\PegawaiSeeder;
use Database\Seeders\MahasiswaSeeder;
use Database\Seeders\BookSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            PegawaiSeeder::class,
            MahasiswaSeeder::class,
            BookSeeder::class,
        ]);
    }
}