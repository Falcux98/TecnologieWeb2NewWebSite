<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('codProdotto');
            $table->string('nome', 30);
            $table->string('descrizioneBreve', 30);
            $table->string('descrizioneEstesa', 120);
            $table->double('prezzo');
            $table->string('foto', 50);
            $table->integer('percentualeSconto');
            $table->boolean('inPromozione');
            $table->integer('categoria');
            $table->integer('sottoCategoria');
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
        Schema::dropIfExists('products');
    }
}
