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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'administradores@gmail.com',
            'turma' => '3 Info',
            'descricao' => 'Presidente',
            'imagem' => '',
            'password' => Hash::make('Admin123'),
            'role' => 'admin',
        ]);

        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'turma' => $faker->randomElement(['1 Info', '2 Info', '3 Info']),
                'descricao' => $faker->sentence(),
                'imagem' => '',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ]);
        }
    }
}
