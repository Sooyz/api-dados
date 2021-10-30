<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('detalles', function (Blueprint $table) {
            $table->string('plataforma');
            $table->string('cliente');
            $table->integer('articulo');
            $table->string('almacem');
            $table->string('ubicacion');
            $table->integer('id');
            $table->string('lote');
            $table->integer('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles');
    }
}
