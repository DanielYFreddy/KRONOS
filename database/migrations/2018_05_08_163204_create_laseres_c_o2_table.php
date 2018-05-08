<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaseresCO2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laseresCO2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motivoConsulta_id')->unsigned();
            $table->string('sesion');
            $table->date('fecha');
            $table->string('area');
            $table->string('pointEnergy');
            $table->string('enveil');
            $table->string('power');
            $table->string('duracion');
            $table->string('intervalo');
            $table->string('distancia');
            $table->string('scan');
            $table->string('times');

            //Llaves Foraneas
            $table->foreign('motivoConsulta_id')->references('id')->on('motivosConsultas');
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
        Schema::dropIfExists('laseresCO2');
    }
}
