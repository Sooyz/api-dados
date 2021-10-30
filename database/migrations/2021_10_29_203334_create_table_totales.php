<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTotales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('totales', function (Blueprint $table) {
            $table->string('plataforma');
            $table->string('cliente');
            $table->integer('articulo');
            $table->integer('tot_stock');
            $table->integer('total_lineas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('totales');
    }
}
