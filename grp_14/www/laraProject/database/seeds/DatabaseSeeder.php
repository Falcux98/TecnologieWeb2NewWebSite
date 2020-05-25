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
              ['codCategoria' => 1, 'descrizione' =>'Computer'],
              ['codCategoria' => 2, 'descrizione' =>'Smartphone & Tablet'],
              ['codCategoria' => 3, 'descrizione' =>'Accessori'],
              ]);
         DB::table('sub_categories')->insert([
             ['codSottocategoria' => 1, 'descrizione' =>'Desktop','categoria'=>'Computer'],
             ['codSottocategoria' => 2, 'descrizione' =>'Laptop','categoria'=>'Computer'],
             ['codSottocategoria' => 3, 'descrizione' =>'2 in 1','categoria'=>'Computer'],
             
             ['codSottocategoria' => 4, 'descrizione' =>'Apple','categoria'=>'Smartphone & Tablet'],
             ['codSottocategoria' => 5, 'descrizione' =>'Samsung','categoria'=>'Smartphone & Tablet'],
             ['codSottocategoria' => 6, 'descrizione' =>'Huawei','categoria'=>'Smartphone & Tablet'],
             ['codSottocategoria' => 7, 'descrizione' =>'Xiaomi','categoria'=>'Smartphone & Tablet'],
             
              ['codSottocategoria' => 8, 'descrizione' =>'Archiviazione','categoria'=>'Accessorit'],
              ['codSottocategoria' => 9, 'descrizione' =>'Input','categoria'=>'Accessori'], 
             ]);
         
         DB::table('product')->insert([
         ['codProdotto' => '1', 'nome' => 'Desktop1', 'descrizioneBreve' => 'Descrizionebreve', 'descrizioneEstesa' =>self::DESCPROD,
           'prezzo' =>1000, 'foto' =>'margherita-50kalo.jpg', 'percentualeSconto'=>0,'inPromozione'=>'0', 'categoria'=>'Computer', 'sottoCategoria'=>'Desktop' ],
             
              
             ]);
        // $this->call(UserSeeder::class);
    }
}
