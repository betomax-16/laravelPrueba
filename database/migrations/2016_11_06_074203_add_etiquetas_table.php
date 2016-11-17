<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEtiquetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiquetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('articulo_etiqueta', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idArticulo')->unsigned();
          $table->integer('idEtiqueta')->unsigned();
          $table->foreign('idArticulo')->references('id')->on('articulos')->onDelete('cascade');
          $table->foreign('idEtiqueta')->references('id')->on('etiquetas')->onDelete('cascade');
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
        Schema::dropIfExists('articulo_etiqueta');
        Schema::dropIfExists('etiquetas');
    }
}
