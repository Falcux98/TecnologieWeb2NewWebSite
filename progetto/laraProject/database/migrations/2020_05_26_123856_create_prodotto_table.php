<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdottoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotto', function (Blueprint $table) {
            $table->id('codProdotto')->autoIncrement();
            $table->string('nome');
            $table->string('descrizioneBreve');
            $table->string('descrizioneEstesa');
            $table->double('prezzo');
            $table->string('foto');
            $table->integer('percentualeSconto');
            $table->boolean('inPromozione');
            $table->integer('categoria');
            $table->integer('sottocategoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodotto');
    }
}
