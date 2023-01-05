<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('nit');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('agente_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('agente_id')->references('id')->on('agentes')->onDelete('cascade');
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
