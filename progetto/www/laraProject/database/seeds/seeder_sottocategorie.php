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
            'nome' => 'Notebook',
            'categoria' => '01',
        ]);

        DB::table('sottocategoria')->insert([
            'nome' => 'PC desktop',
            'categoria' => '01',
        ]);

        DB::table('sottocategoria')->insert([
            'nome' => '2 in 1',
            'categoria' => '01',
        ]);


        DB::table('sottocategoria')->insert([
            'nome' => 'All-in-one',
            'categoria' => '01',
        ]);
        
        DB::table('sottocategoria')->insert([
            'nome' => 'Smart TV',
            'categoria' => '02',
        ]);
        
        DB::table('sottocategoria')->insert([
            'nome' => 'TV LED',
            'categoria' => '02',
        ]);
        
        DB::table('sottocategoria')->insert([
            'nome' => 'TV OLED',
            'categoria' => '02',
        ]);
        
        DB::table('sottocategoria')->insert([
            'nome' => 'Smartphone Android',
            'categoria' => '03',
        ]);
        
        DB::table('sottocategoria')->insert([
            'nome' => 'iPhone',
            'categoria' => '03',
        ]);
        
        DB::table('sottocategoria')->insert([
            'nome' => 'Tablet Android',
            'categoria' => '03',
        ]);
        
        DB::table('sottocategoria')->insert([
            'nome' => 'iPad',
            'categoria' => '03',
        ]);
        
         DB::table('sottocategoria')->insert([
            'nome' => 'Cuffie e auricolari',
            'categoria' => '03',
        ]);
         
          DB::table('sottocategoria')->insert([
            'nome' => 'Processori',
            'categoria' => '04',
        ]);
          
           DB::table('sottocategoria')->insert([
            'nome' => 'Schede video',
            'categoria' => '04',
        ]);
           
            DB::table('sottocategoria')->insert([
            'nome' => 'RAM',
            'categoria' => '04',
        ]);
            
             DB::table('sottocategoria')->insert([
            'nome' => 'Hard Disk e SSD',
            'categoria' => '04',
        ]);
    }
}
