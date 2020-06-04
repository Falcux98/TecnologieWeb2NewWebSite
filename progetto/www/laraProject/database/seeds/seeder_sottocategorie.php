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
            'nome' => 'Notebook',
            'categoria' => '01',
        ]);

        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '02',
            'nome' => 'PC desktop',
            'categoria' => '01',
        ]);

        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '03',
            'nome' => '2 in 1',
            'categoria' => '01',
        ]);


        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '04',
            'nome' => 'All-in-one',
            'categoria' => '01',
        ]);
        
        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '05',
            'nome' => 'Smart TV',
            'categoria' => '02',
        ]);
        
        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '06',
            'nome' => 'TV LED',
            'categoria' => '02',
        ]);
        
        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '07',
            'nome' => 'TV OLED',
            'categoria' => '02',
        ]);
        
        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '08',
            'nome' => 'Smartphone Android',
            'categoria' => '03',
        ]);
        
        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '09',
            'nome' => 'iPhone',
            'categoria' => '03',
        ]);
        
        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '10',
            'nome' => 'Tablet Android',
            'categoria' => '03',
        ]);
        
        DB::table('sottocategoria')->insert([
            'codSottocategoria' => '11',
            'nome' => 'iPad',
            'categoria' => '03',
        ]);
        
         DB::table('sottocategoria')->insert([
            'codSottocategoria' => '12',
            'nome' => 'Cuffie e auricolari',
            'categoria' => '03',
        ]);
         
          DB::table('sottocategoria')->insert([
            'codSottocategoria' => '13',
            'nome' => 'Processori',
            'categoria' => '04',
        ]);
          
           DB::table('sottocategoria')->insert([
            'codSottocategoria' => '14',
            'nome' => 'Schede video',
            'categoria' => '04',
        ]);
           
            DB::table('sottocategoria')->insert([
            'codSottocategoria' => '15',
            'nome' => 'RAM',
            'categoria' => '04',
        ]);
            
             DB::table('sottocategoria')->insert([
            'codSottocategoria' => '16',
            'nome' => 'Hard Disk e SSD',
            'categoria' => '04',
        ]);
    }
}
