<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class seeder_utenti extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Matteo',
            'cognome' => 'Mori',
            'role' => 'admin',
            'username' => 'adminadmin',
            'password' => Hash::make('adminadmin'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'nome' => 'Matteo',
            'cognome' => 'Rossi',
            'role' => 'staff',
            'username' => 'staffstaff',
            'password' => Hash::make('staffstaff'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'dataNascita' => '1997-08-25',
            'occupazione' => 'Macellaio',
            'residenza' => 'Ancona',
            'username' => 'useruser',
            'role' => 'user',
            'password' => Hash::make('useruser'),
            'foto' => '/laptop1.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'nome' => 'Luigi',
            'cognome' => 'Bianchi',
            'dataNascita' => '1997-08-25',
            'occupazione' => 'Giardiniere',
            'residenza' => 'Senigallia',
            'username' => 'useruser1',
            'role' => 'user',
            'password' => Hash::make('useruser'),
            'foto' => '/laptop1.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);


    }
}
