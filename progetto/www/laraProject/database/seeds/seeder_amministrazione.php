<?php

use Illuminate\Database\Seeder;

class seeder_amministrazione extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amministrazione')->insert([
            'codAdmin' => '001',
            'nome' => 'Matteo',
            'cognome' => 'Mori',
            'isAdmin' => '1',
            'username' => 'adminadmin',
            'password' => 'adminadmin'
        ]);

        DB::table('amministrazione')->insert([
            'codAdmin' => '002',
            'nome' => 'Matteo',
            'cognome' => 'Rossi',
            'isAdmin' => '0',
            'username' => 'staffstaff',
            'password' => 'staffstaff'
        ]);

    }
}
