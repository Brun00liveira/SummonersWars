<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ParticipacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('participacoes')->insert([
            'user_id' => 1,
            'pontos' => rand(0, 300),
            'subjugacao' =>rand(0, 111111100),
            'tartarus' => rand(0, 300),
            'check_in' => rand(0, 300),
            'status_id' => 1
        ]);
    }
}
