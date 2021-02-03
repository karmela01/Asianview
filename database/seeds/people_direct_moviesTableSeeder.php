<?php

use Illuminate\Database\Seeder;

class people_direct_moviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '1',
            'people_id'=> '2',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '2',
            'people_id'=> '4',

        ]);DB::table('people_direct_movies')->insert([
            'movie_id'=> '3',
            'people_id'=> '6',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '4',
            'people_id'=> '8',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '5',
            'people_id'=> '10',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '6',
            'people_id'=> '12',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '7',
            'people_id'=> '14',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '8',
            'people_id'=> '1',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '9',
            'people_id'=> '3',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '10',
            'people_id'=> '5',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '11',
            'people_id'=> '7',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '12',
            'people_id'=> '9',

        ]);
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '13',
            'people_id'=> '11',

        ]);
    }
}
