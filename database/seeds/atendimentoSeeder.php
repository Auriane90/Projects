<?php

use Illuminate\Database\Seeder;

class atendimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atendimentos')->insert(['nome'=> 'Arquivo', 'quantidade'=> 125]);
        DB::table('atendimentos')->insert(['nome'=> 'Computador', 'quantidade'=> 789]);
        DB::table('atendimentos')->insert(['nome'=> 'Impressora', 'quantidade'=> 234]);
        DB::table('atendimentos')->insert(['nome'=> 'Programa', 'quantidade'=> 350]);
        DB::table('atendimentos')->insert(['nome'=> 'Rede', 'quantidade'=> 45]);
    }
}
