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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('codprodotto')->unique();
            $table->string('nome');
            $table->string('descrizionebreve');
            $table->string('descrizioneestesa');
            $table->double('prezzo');
            $table->string('foto');
            $table->integer('percentualesconto');
            $table->boolean('inpromozione');
            $table->integer('categoria');
            $table->integer('sottocategoria');
            $table->id();
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
