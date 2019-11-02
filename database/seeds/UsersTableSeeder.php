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
            'name'  =>  'Maria da Silva',
            'email' => 'mariasilva1830@gmail.com',
            'password'   => Hash::make('1234'),
       ]);
       DB::table('users')->insert([
            'name'  =>  'Aldemir da Silva',
            'email' => 'aldemir1830@gmail.com',
            'password'   => Hash::make('1234'),
       ]);
    }
}
