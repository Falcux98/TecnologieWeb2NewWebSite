<?php

use Illuminate\Database\Seeder;

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
            'codutente' => 'U001',
            'nome' => 'mario',
            'cognome' => 'rossi',
            'datanascita' => '1997-08-25',
            'occupazione' => 'macellaio',
            'username' => 'useruser',
            'password' => 'useruser'
        ]);
    }
}
