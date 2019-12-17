<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Nextem',
            'email'    => 'test@nextem.com.br',
            'password' => bcrypt('1234'),
        ]);
    }
}
