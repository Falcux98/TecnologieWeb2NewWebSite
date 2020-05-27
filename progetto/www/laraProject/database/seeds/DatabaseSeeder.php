<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call('seeder_prodotti');
      $this->call('seeder_categorie');
      $this->call('seeder_sottocategorie');
      //$this->call('seeder_amministrazione');
      //$this->call('seeder_utenti');
    }
}
