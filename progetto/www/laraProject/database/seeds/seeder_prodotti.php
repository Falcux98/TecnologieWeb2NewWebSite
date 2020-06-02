<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut ante sed tellus maximus porta quis iaculis lacus. Phasellus bibendum varius nunc id sagittis. Cras efficitur ullamcorper est in lobortis. Nam cursus blandit finibus. Praesent pellentesque nibh convallis, pulvinar leo eu, vulputate odio. Cras metus elit, pulvinar non accumsan ac, porttitor eget quam. Curabitur eget justo felis. Maecenas quis fermentum lorem. Proin consectetur nunc mollis felis finibus porta. Curabitur pharetra lacinia nibh vitae cursus. Sed ornare lacus justo, sit amet efficitur est semper ac. Vestibulum sagittis condimentum metus a ornare. Phasellus porta aliquet dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras quis libero suscipit, auctor tellus nec, placerat leo. Maecenas viverra diam nec pharetra fringilla.',
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
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut ante sed tellus maximus porta quis iaculis lacus. Phasellus bibendum varius nunc id sagittis. Cras efficitur ullamcorper est in lobortis. Nam cursus blandit finibus. Praesent pellentesque nibh convallis, pulvinar leo eu, vulputate odio. Cras metus elit, pulvinar non accumsan ac, porttitor eget quam. Curabitur eget justo felis. Maecenas quis fermentum lorem. Proin consectetur nunc mollis felis finibus porta. Curabitur pharetra lacinia nibh vitae cursus. Sed ornare lacus justo, sit amet efficitur est semper ac. Vestibulum sagittis condimentum metus a ornare. Phasellus porta aliquet dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras quis libero suscipit, auctor tellus nec, placerat leo. Maecenas viverra diam nec pharetra fringilla.',
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
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut ante sed tellus maximus porta quis iaculis lacus. Phasellus bibendum varius nunc id sagittis. Cras efficitur ullamcorper est in lobortis. Nam cursus blandit finibus. Praesent pellentesque nibh convallis, pulvinar leo eu, vulputate odio. Cras metus elit, pulvinar non accumsan ac, porttitor eget quam. Curabitur eget justo felis. Maecenas quis fermentum lorem. Proin consectetur nunc mollis felis finibus porta. Curabitur pharetra lacinia nibh vitae cursus. Sed ornare lacus justo, sit amet efficitur est semper ac. Vestibulum sagittis condimentum metus a ornare. Phasellus porta aliquet dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras quis libero suscipit, auctor tellus nec, placerat leo. Maecenas viverra diam nec pharetra fringilla.',
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
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
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
            'descrizioneEstesa' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'prezzo' => '2000.50',
            'foto' => '/diavola.jpg',
            'percentualeSconto' => '15',
            'inPromozione' => '1',
            'categoria' => '02',
            'sottocategoria' => '03'
        ]);
    }
}
