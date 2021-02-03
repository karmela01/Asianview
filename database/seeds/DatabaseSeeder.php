<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(genres_moviesTableSeeder::class);
        $this->call(people_act_moviesTableSeeder::class);
        $this->call(people_direct_moviesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);

    }
}
