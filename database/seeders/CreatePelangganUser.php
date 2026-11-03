<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;

class CreatePelangganUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'first_name' => 'Adi',
            'last_name'  => 'Sucipto',
            'birthday'   => '2000/01/01',
            'gender'     => 'Female',
            'email'      => 'pealanggan@gmail.com',
            'phone'      => '082145587665'
        ]);
    }
}
