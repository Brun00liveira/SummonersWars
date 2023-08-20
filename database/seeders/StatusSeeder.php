<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('situacoes')->insert([
            'codigo' => 0,
            'status' => 'inativo'
        ]);

        DB::table('situacoes')->insert([
            'codigo' => 1,
            'status' => 'pendente'
        ]);

        DB::table('situacoes')->insert([
            'codigo' => 2,
            'status' => 'ativo'
        ]);
    }
}
