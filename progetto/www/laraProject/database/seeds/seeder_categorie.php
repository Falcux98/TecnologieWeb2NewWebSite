<?php

use Illuminate\Database\Seeder;

class seeder_categorie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'codCategoria' => '01',
            'nome' => 'Computer'
        ]);

        DB::table('categoria')->insert([
            'codCategoria' => '02',
            'nome' => 'TV'
        ]);

        DB::table('categoria')->insert([
            'codCategoria' => '03',
            'nome' => 'Smartphone e tablet'
        ]);
        
        DB::table('categoria')->insert([
            'codCategoria' => '04',
            'nome' => 'Componenti PC'
        ]);
        
        
    }
}
