<?php

use Illuminate\Database\Seeder;

class AnnotationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annotation')->insert([
            'titulo'  =>  'Nota 01',
            'message' => 'Minha primeira anotação',
       ]);
       DB::table('annotation')->insert([
            'titulo'  =>  'Nota 02',
            'message' => 'Minha segunda anotação aki',
       ]);
    }
}
