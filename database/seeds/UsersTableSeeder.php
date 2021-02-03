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
            'name'=> 'carmen',
            'email'=> 'carmen@mail.com',
            'password'=>  Hash::make('1234'),
            //'password'=> Hash::make('1234'), para encriptar la contraseña
        ]);
        DB::table('users')->insert([
            'name'=> 'juan',
            'email'=> 'pepe@mail.com',
            'password'=> Hash::make('0000'),
        ]);
        DB::table('users')->insert([
            'name'=> 'pedro',
            'email'=> 'pedro@mail.com',
            'password'=> Hash::make('0000'),
        ]);
        DB::table('users')->insert([
            'name'=> 'juan',
            'email'=> 'juan@mail.com',
            'password'=> Hash::make('0000'),
        ]);
        DB::table('users')->insert([
            'name'=> 'ines',
            'email'=> 'ines@mail.com',
            'password'=> Hash::make('0000'),
        ]);
    }
}
