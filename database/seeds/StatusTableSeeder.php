<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert(['status' => 'Done']);
        DB::table('status')->insert(['status' => 'WIP']);
        DB::table('status')->insert(['status' => 'Review']);
        DB::table('status')->insert(['status' => 'To Do']);
    }
}
