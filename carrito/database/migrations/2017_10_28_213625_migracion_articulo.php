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
        Schema::create('articulo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrito_id')->unsigned();
            $table->foreign('carrito_id')->references('id')->on('carrito')->onDelete('cascade');
            $table->integer('detalleArticulo_id')->unsigned();
            $table->foreign('detalleArticulo_id')->references('id')->on('detalleArticulo')->onDelete('cascade');
            $table->integer('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamento')->onDelete('cascade');
            $table->string('titulo_articulo');
            $table->double('precio', 15,2);
            $table->double('descuento',4,2);
            $table->bigInteger('existencias');
            $table->binary('imagen_articulo');
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
        Schema::dropIfExists('articulo');
    }
}
