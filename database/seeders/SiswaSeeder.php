<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'siswa kece',
                'nis'=>'222310276',
                'role'=>'siswa',
                'password'=>bcrypt('2024')
            ],
            [
                'name'=>'Alif Miftah Fauzan',
                'nis'=>'222310254',
                'role'=>'siswa',
                'password'=>bcrypt('111')
            ],
            [
                'name'=>'guru kece',
                'nis'=>'2223102706',
                'role'=>'guru',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Orang Tua',
                'nis'=>'2223102707',
                'role'=>'orang tua',
                'password'=>bcrypt('12345678')
            ],
            [
                'name'=>'Bang Admin',
                'nis'=>'22222222',
                'role'=>'admin',
                'password'=>bcrypt('54321')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
