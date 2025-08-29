<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $faker = Faker::create();

    $usuarios = [[
        'name' => 'Admin',
        'email' => 'administradores@gmail.com',
        'turma' => '3 Info',
        'descricao' => 'Presidente',
        'imagem' => 'https://via.placeholder.com/150x150.png?text=Admin',
        'password' => Hash::make('Admin123'),
        'role' => 'admin',
    ]];

    for ($i = 0; $i < 20; $i++) {
        $usuarios[] = [
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'turma' => $faker->randomElement(['1 Info', '2 Info', '3 Info']),
            'descricao' => $faker->sentence(),
            'imagem' => $faker->randomElement(['1yTWyVcyieiPSMit3VUv3EucxIw7uenyccla3TSH.jpg', 'dlEkX5b5eZxBDpvo7kzwx3ZDTR1IjeJ8LUk1LNLa.jpg', 'UpG5vGYCU3MJWYXxSlYFhFN386KNEIEkqzqO5qWT.jpg' ]),
            'password' => Hash::make('password123'),
            'role' => 'user',
        ];
    }

    DB::table('users')->insert($usuarios);
}

}
