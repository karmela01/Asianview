<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'description'=>'comedia',
        ]);
        DB::table('genres')->insert([
            'description'=>'drama',
        ]);
        DB::table('genres')->insert([
            'description'=>'ciencia-ficción',
        ]);
        DB::table('genres')->insert([
            'description'=>'terror',
        ]);
        DB::table('genres')->insert([
            'description'=>'anime',
        ]);
        DB::table('genres')->insert([
            'description'=>'thriller',
        ]);
        DB::table('genres')->insert([
            'description'=>'romantica',
        ]);

    }
}
