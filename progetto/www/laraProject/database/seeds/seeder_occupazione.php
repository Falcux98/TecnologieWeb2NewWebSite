<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seeder_occupazione extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('occupazione')->insert([
            'codOccupazione' => '01',
            'nome' => 'Disoccupato'
        ]);

        DB::table('occupazione')->insert([
            'codOccupazione' => '02',
            'nome' => 'Studente'
        ]);

        DB::table('occupazione')->insert([
            'codOccupazione' => '03',
            'nome' => 'Operaio'
        ]);

        DB::table('occupazione')->insert([
            'codOccupazione' => '04',
            'nome' => 'Ingegnere'
        ]);

        DB::table('occupazione')->insert([
            'codOccupazione' => '05',
            'nome' => 'Medico'
        ]);

        DB::table('occupazione')->insert([
            'codOccupazione' => '06',
            'nome' => 'Insegnante'
        ]);

        DB::table('occupazione')->insert([
            'codOccupazione' => '07',
            'nome' => 'Libero Professionista'
        ]);
    }
}
