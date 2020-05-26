<?php

use Illuminate\Database\Seeder;

class seeder_prodotti extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodotto')->insert([
            'codProdotto' => '01',
            'nome' => 'Dell XPS 15',
            'descrizioneBreve' => 'Costa na cifra',
            'descrizioneEstesa' => 'Costa una cifra significa che costa tanto',
            'prezzo' => '2000.50',
            'foto' => '/diavola.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '02'
        ]);


        DB::table('prodotto')->insert([
            'codProdotto' => '02',
            'nome' => 'Dell XPS 400',
            'descrizioneBreve' => 'Costa na cifra',
            'descrizioneEstesa' => 'Costa una cifra significa che costa tanto',
            'prezzo' => '2000.50',
            'foto' => '/diavola.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '0',
            'categoria' => '01',
            'sottocategoria' => '02'
        ]);
    
    }
}
