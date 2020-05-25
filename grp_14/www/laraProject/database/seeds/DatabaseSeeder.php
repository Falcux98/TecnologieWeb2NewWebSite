<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
     const DESCPROD = '<p> Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et doLorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et do</p>';
    public function run()
    {
         DB::table('categories')->insert([
              ['codCategoria' => 1, 'nome' =>'Computer'],
              ['codCategoria' => 2, 'nome' =>'Smartphone & Tablet'],
              ['codCategoria' => 3, 'nome' =>'Accessori'],
              ]);
              
         DB::table('sub_categories')->insert([
             ['codSottocategoria' => 1, 'nome' =>'Desktop','categoria'=> 1],
             ['codSottocategoria' => 2, 'nome' =>'Laptop','categoria'=> 1],
             ['codSottocategoria' => 3, 'nome' =>'2 in 1','categoria'=> 1],
             
             ['codSottocategoria' => 4, 'nome' =>'Apple','categoria'=> 2],
             ['codSottocategoria' => 5, 'nome' =>'Samsung','categoria'=> 2],
             ['codSottocategoria' => 6, 'nome' =>'Huawei','categoria'=> 2],
             ['codSottocategoria' => 7, 'nome' =>'Xiaomi','categoria'=> 2],
             
              ['codSottocategoria' => 8, 'nome' =>'Archiviazione','categoria'=> 3],
              ['codSottocategoria' => 9, 'nome' =>'Input','categoria'=> 3], 
             ]);
         
         DB::table('products')->insert([
         ['codProdotto' => 1, 'nome' => 'Desktop1', 'descrizioneBreve' => 'Descrizionebreve', 'descrizioneEstesa' =>self::DESCPROD,
           'prezzo' =>1000, 'foto' =>'margherita-50kalo.jpg', 'percentualeSconto'=>0,'inPromozione'=>'0', 'categoria'=> 1, 'sottoCategoria'=> 1 ],
         ]);
        // $this->call(UserSeeder::class);
    }
}
