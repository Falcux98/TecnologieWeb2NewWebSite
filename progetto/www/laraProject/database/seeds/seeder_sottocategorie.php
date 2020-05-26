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
            'codSottocategoria' => '01',
            'nome' => 'Desktop',
            'categoria' => '01',
        ]);

        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '02',
            'nome' => 'Laptop',
            'categoria' => '01',
        ]);

        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '03',
            'nome' => 'Armadio',
            'categoria' => '02',
        ]);


        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '04',
            'nome' => 'Samsung',
            'categoria' => '03',
        ]);
    }
}
