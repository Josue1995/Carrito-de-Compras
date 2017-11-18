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
        Schema::create('subclasificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventario_id');
            $table->integer('departamento_id');
            $table->string('nombre_sub');
            $table->foreign('inventario_id')->references('id')->on('inventarios')->onDelete('cascade');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
      });
        Schema::create('articulos_subclasificacions',  function(Blueprint $table){
        $table->increments('id');
        $table->integer('articulo_id')->nullable();
        $table->integer('subclasificacion_id')->nullable();
        $table->foreign('articulo_id')->references('id')->on('articulos');
        $table->foreign('subclasificacion_id')->references('id')->on('subclasificacions');
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
        Schema::dropIfExists('subclasificacions');
        Schema::dropIfExists('articulos_subclasificacions');
    }
}