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
            $table->string('codprodotto')->unique();
            $table->string('nome');
            $table->string('descbreve');
            $table->string('descestesa');
            $table->double('prezzo');
            $table->string('foto');
            $table->integer('percentualesconto');
            $table->boolean('inpromozione');
            $table->string('categoria');
            $table->string('sottocategoria');
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
