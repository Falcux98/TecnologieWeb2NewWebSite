<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'role' => 'admin',
            'username' => 'adminadmin',
            'password' => 'adminadmin'
        ]);

        DB::table('amministrazione')->insert([
            'codAdmin' => '002',
            'nome' => 'Matteo',
            'cognome' => 'Rossi',
            'role' => 'staff',
            'username' => 'staffstaff',
            'password' => 'staffstaff'
        ]);

    }
}
