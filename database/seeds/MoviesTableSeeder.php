<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title'=> 'parasitos',
            'year'=> '2019',
            'duration'=> '132',
            'rating'=> '4',
            'cover' =>'parasitos.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'i am a hero',
            'year'=> '2019',
            'duration'=> '132',
            'rating'=> '8',
            'cover' =>'i am a hero.jpg',
            'filename' =>'algo',
            'filepath' =>'i am a hero.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'the host',
            'year'=> '2018',
            'duration'=> '126',
            'rating'=> '3',
            'cover' =>'the host.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'jojos bizarre adventure',
            'year'=> '2017',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'jojos bizarre adventure.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'shadow',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'sombra.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);

        DB::table('movies')->insert([
            'title'=> 'monstrum',
            'year'=> '2017',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'monstrum.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);

        DB::table('movies')->insert([
            'title'=> 'spirits homecoming',
            'year'=> '2016',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'spirits homecoming.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'tu nombre',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'tu nombre.jpg',
            'filename' =>'algo',
            'filepath' =>'tu nombre.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'the witness',
            'year'=> '2019',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'the witness.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'time renegades',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'time renegades.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'tren a busan',
            'year'=> '2019',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'tren a busan.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'memorias de un asesino',
            'year'=> '2012',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'memorias de un asesino.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'la chica que saltaba a traves del tiempo',
            'year'=> '2011',
            'duration'=> '98',
            'rating'=> '3',
            'cover' =>'la chica que saltaba a traves del tiempo.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'rampant',
            'year'=> '2010',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'rampant.jpg',
            'filename' =>'algo',
            'filepath' =>'parasitos.mp4',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'i am a hero',
            'year'=> '2019',
            'duration'=> '110',
            'rating'=> '7',
            'cover' =>'i am a hero.jpg',
            'filename' =>'algo',
            'filepath' =>'i am a hero.mp4',
            'externalurl' =>'algo',
        ]);

    }
}
