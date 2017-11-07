<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionArticulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrito_id')->unsigned();
            $table->foreign('carrito_id')->references('id')->on('carritos')->onDelete('cascade');
            $table->integer('detalleArticulo_id')->unsigned();
            $table->foreign('detalleArticulo_id')->references('id')->on('detallearticulos')->onDelete('cascade');
            $table->integer('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
            $table->integer('catalogos_id')->unsigned();
            $table->foreign('catalogos_id')->references('id')->on('catalogos')->onDelete('cascade');
            $table->string('titulo_articulo');
            $table->double('precio', 15,2);
            $table->double('descuento',4,2);
            $table->bigInteger('existencias');
            $table->binary('imagen_articulo');
            $table->softDeletes();
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
        Schema::dropIfExists('articulos');
    }
}
