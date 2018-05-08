<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaseres1540Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laseres1540', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motivoConsulta_id')->unsigned();
            $table->string('sesion');
            $table->date('fecha');
            $table->string('localizacion');
            $table->string('totalDisparos');
            $table->string('nivelUtilizado');
            $table->mediumText('anotaciones');

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
        Schema::dropIfExists('laseres1540');
    }
}
