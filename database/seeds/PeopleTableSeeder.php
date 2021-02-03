<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name'=> 'kim in kwon',
            'photo'=> 'kim in kwon.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'kim myung min',
            'photo'=> 'kim myung min.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'ryan zheng',
            'photo'=> 'ryan zheng.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'li sun',
            'photo'=> 'li sun.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'chao deng',
            'photo'=> 'chao deng.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'yimou zhang',
            'photo'=> 'yimou zhang.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'jo jung suk',
            'photo'=> 'jo jung suk.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'lim soo jung',
            'photo'=> 'lim soo jung.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'park so dam',
            'photo'=> 'park so dam.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'lee sun kyun',
            'photo'=> 'lee sun kyun.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'song kang ho',
            'photo'=> 'song kang ho.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'na hong jin',
            'photo'=> 'na hong jin.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'kwak do won',
            'photo'=> 'kwak do won.jpg',
            'externalurl'=>'luego',

        ]);

        DB::table('people')->insert([
            'name'=> 'bong joon ho',
            'photo'=> 'bong joon ho.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'hwang jung min',
            'photo'=> 'hwang jung min.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'jun Kunimura',
            'photo'=> 'jun Kunimura.jpg',
            'externalurl'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'bna hong jin',
            'photo'=> 'na hong jin.jpg',
            'externalurl'=>'luego',

        ]);
    }
}
