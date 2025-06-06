<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('noticias')->insert([
            'conteudo' => 'Exemplo de nota 1',
        ]);

        DB::table('notas')->insert([
            'conteudos' => 'Exemplo de nota 2',
        ]);
    }
}
