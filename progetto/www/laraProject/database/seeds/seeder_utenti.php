<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seeder_utenti extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utente')->insert([
            'codUtente' => '001',
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'dataNascita' => '1997-08-25',
            'occupazione' => 'Macellaio',
            'residenza' => 'Ancona',
            'username' => 'useruser',
            'role' => 'user',
            'password' => 'useruser'
        ]);

        DB::table('utente')->insert([
            'codUtente' => '002',
            'nome' => 'Luigi',
            'cognome' => 'Bianchi',
            'dataNascita' => '1997-08-25',
            'occupazione' => 'Giardiniere',
            'residenza' => 'Senigallia',
            'username' => 'useruser1',
            'role' => 'user',
            'password' => 'useruser'
        ]);
    }
}
