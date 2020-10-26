<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula_persona')->unsigned();
            $table->string('tipo');
            $table->string('descripcion');
            $table->date('fecha_solicitud');
            $table->string('estado');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cedula_persona')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicituds');
    }
}
