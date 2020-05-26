<?php

use Illuminate\Database\Seeder;

class seeder_sottocategorie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sottocategoria')->insert([
            'codsottocategoria' => '01',
            'descrizione' => 'Desktop',
            'categoria' => '01',
        ]);
    }
}
