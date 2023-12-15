<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrimestresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Trimestres a serem inseridos
        $trimestres = ['1ª', '2ª', '3ª'];

        // Inserir os trimestres na tabela
        foreach ($trimestres as $trimestre) {
            DB::table('trimestres')->insert([
                'trimestre' => $trimestre,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
