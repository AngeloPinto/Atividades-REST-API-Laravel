<?php

use Illuminate\Database\Seeder;

class ResponsavelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responsavel')->insert(['nome' => 'Arthur Costa']);
        DB::table('responsavel')->insert(['nome' => 'Binca Martins']);
        DB::table('responsavel')->insert(['nome' => 'Brenda Rocha']);
        DB::table('responsavel')->insert(['nome' => 'Clara Martins']);
        DB::table('responsavel')->insert(['nome' => 'Eduarda Dias']);
        DB::table('responsavel')->insert(['nome' => 'Eduardo Ribeiro']);
        DB::table('responsavel')->insert(['nome' => 'Enzo Cardoso']);
        DB::table('responsavel')->insert(['nome' => 'Isabella Azevedo']);
        DB::table('responsavel')->insert(['nome' => 'João Barros']);
        DB::table('responsavel')->insert(['nome' => 'Julieta Silva']);
        DB::table('responsavel')->insert(['nome' => 'Leonardo Araujo']);
        DB::table('responsavel')->insert(['nome' => 'Rodrigo Silva']);
        DB::table('responsavel')->insert(['nome' => 'Sophia Lima']);
        DB::table('responsavel')->insert(['nome' => 'Tomás Melo']);
        DB::table('responsavel')->insert(['nome' => 'Vitória Sousa']);
    }
}
