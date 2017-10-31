<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionSubclasificacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subclasificacion', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('inventario_id')->unsigned();
          $table->integer('departamento_id')->unsigned();
          $table->string('nombre_sub');
          $table->foreign('inventario_id')->references('id')->on('inventario')->onDelete('cascade');
          $table->foreign('departamento_id')->references('id')->on('departamento')->onDelete('cascade');
          $table->timestamps();
      });
      Schema::create('articulo_subclasificacion',  function(Blueprint $table){
        $table->increments('id');
        $table->integer('articulo_id')->unsigned();
        $table->integer('subclasificacion_id')->unsigned();
        $table->foreign('articulo_id')->references('id')->on('articulo');
        $table->foreign('subclasificacion_id')->references('id')->on('subclasificacion');
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
        Schema::dropIfExists('subclasificacion');
    }
}
