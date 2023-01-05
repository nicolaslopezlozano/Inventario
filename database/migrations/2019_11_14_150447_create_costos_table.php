<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produccion_id')->unsigned();
            $table->float('precio');
            $table->integer('cantidad');
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('produccion_id')->references('id')->on('produccion')->onDelete('cascade');
            $table->foreign('proveedor_id')->references('id')->on('compra_proveedor')->onDelete('cascade');
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
        Schema::dropIfExists('costos');
    }
}
