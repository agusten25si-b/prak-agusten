<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserJawaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');

        $namaDepanJawa = [
            'Slamet', 'Budi', 'Agus', 'Joko', 'Sutrisno',
            'Wahyu', 'Dwi', 'Eko', 'Bambang', 'Sigit',
            'Teguh', 'Hendra', 'Rizky', 'Arif', 'Dimas',
            'Bayu', 'Andi', 'Rudi', 'Cahyo', 'Purnomo',
            'Sri', 'Siti', 'Dewi', 'Rini', 'Wulan',
            'Ratna', 'Indah', 'Ayu', 'Lestari', 'Ningsih',
            'Kartika', 'Putri', 'Sulastri', 'Wati', 'Yuni',
            'Endang', 'Retno', 'Fitri', 'Nur', 'Anisa'
        ];

        $namaBelakangJawa = [
            'Santoso', 'Wijaya', 'Saputra', 'Setiawan',
            'Pratama', 'Susanto', 'Hidayat', 'Wibowo',
            'Kurniawan', 'Purnama', 'Nugroho', 'Suryanto',
            'Hartono', 'Suharto', 'Prakoso', 'Kusuma',
            'Wulandari', 'Handayani', 'Puspitasari',
            'Lestari', 'Rahayu', 'Susanti', 'Astuti',
            'Safitri', 'Maharani'
        ];

        foreach (range(1, 100) as $index) {
            $nama = $faker->randomElement($namaDepanJawa)
                  . ' '
                  . $faker->randomElement($namaBelakangJawa);

            DB::table('users')->insert([
                'name' => $nama,
                'email' => 'user' . $index . '@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


