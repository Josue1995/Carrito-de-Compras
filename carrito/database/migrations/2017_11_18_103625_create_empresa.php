<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventario_id')->nullable();
            $table->foreign('inventario_id')->references('id')->on('inventarios')->onDelete('cascade');
            $table->integer('catalogo_id')->nullable();
            $table->foreign('catalogo_id')->references('id')->on('catalogos')->onDelete('cascade');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nombre_empresa');
            $table->string('telefono');
            $table->string('direccion_empresa');
            $table->string('correo_electronico');
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
        Schema::dropIfExists('empresas');
    }
}
