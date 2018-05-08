<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCryosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cryos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motivoConsulta_id')->unsigned();
            $table->string('sesion');
            $table->string('imc');
            $table->string('porcentajeGrasa');
            $table->string('area');
            $table->string('medida');
            $table->string('tiempo');
            $table->string('frio');
            $table->string('vibracion');

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
        Schema::dropIfExists('cryos');
    }
}
