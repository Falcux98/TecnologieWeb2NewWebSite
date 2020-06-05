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
            'nome' => 'Computer'
        ]);

        DB::table('categoria')->insert([
            'nome' => 'TV'
        ]);

        DB::table('categoria')->insert([
            'nome' => 'Smartphone e tablet'
        ]);
        
        DB::table('categoria')->insert([
            'nome' => 'Componenti PC'
        ]);
        
        
    }
}
