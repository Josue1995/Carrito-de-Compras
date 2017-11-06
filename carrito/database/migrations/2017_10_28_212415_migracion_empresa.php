<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionEmpresa extends Migration
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
            $table->integer('roles_id')->unsigned();
            $table->integer('users_id');
            $table->string('nombre_empresa');
            $table->string('telefono');
            $table->string('direccion_empresa');
            $table->string('correo_electronico');
            $table->foreign('roles_id')->references('id')->on('rols')->onDelete('cascade');
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
