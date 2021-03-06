<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('codUtente');
            $table->string('nome');
            $table->string('cognome');
            $table->date('dataNascita')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('occupazione')->default('');
            $table->string('residenza')->default('');
            $table->string('username')->unique();
            $table->string('role',10)->default('user');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
