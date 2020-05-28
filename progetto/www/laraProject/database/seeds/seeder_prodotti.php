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
            'nome' => 'Laptop 1',
            'descrizioneBreve' => 'Descrizione breve',
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis velit dolor. Vivamus eu pulvinar purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec placerat risus turpis, in interdum lacus facilisis sit amet.',
            'prezzo' => '2000.50',
            'foto' => '/laptop1.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '02'
        ]);


        DB::table('prodotto')->insert([
            'nome' => 'Laptop 2',
            'descrizioneBreve' => 'Descrizione breve',
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis velit dolor. Vivamus eu pulvinar purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec placerat risus turpis, in interdum lacus facilisis sit amet.',
            'prezzo' => '2000.50',
            'foto' => '/laptop2.jpg',
            'percentualeSconto' => '10',
            'inPromozione' => '0',
            'categoria' => '01',
            'sottocategoria' => '02'
        ]);
        
        DB::table('prodotto')->insert([
            'nome' => 'Desktop1',
            'descrizioneBreve' => 'Descrizione breve',
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis velit dolor. Vivamus eu pulvinar purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec placerat risus turpis, in interdum lacus facilisis sit amet.',
            'prezzo' => '2000.50',
            'foto' => '/desktop1.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '01'
        ]);
        
         DB::table('prodotto')->insert([
            'nome' => 'Desktop2',
            'descrizioneBreve' => 'Descrizione breve',
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis velit dolor. Vivamus eu pulvinar purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec placerat risus turpis, in interdum lacus facilisis sit amet.',
            'prezzo' => '2000.50',
            'foto' => '/desktop2.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '01',
            'sottocategoria' => '01'
        ]);
    
         DB::table('prodotto')->insert([
            'nome' => 'Armadio1',
            'descrizioneBreve' => 'Descrizione breve',
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis velit dolor. Vivamus eu pulvinar purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec placerat risus turpis, in interdum lacus facilisis sit amet.',
            'prezzo' => '2000.50',
            'foto' => '/diavola.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '02',
            'sottocategoria' => '03'
        ]);
    }
}
