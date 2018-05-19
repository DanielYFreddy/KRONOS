<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlesPesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlesPesos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motivoConsulta_id')->unsigned();
            $table->string('sesion');
            $table->string('cintura');
            $table->string('cadera');
            $table->string('musloDerecho');
            $table->string('musloIzquierdo');
            $table->string('brazoDerecho');
            $table->string('brazoIzquierdo');
            $table->string('talla');
            $table->string('peso');
            $table->string('porcentajeGrasa');
            $table->string('porcentajeAgua');
            $table->string('masaMuscular');
            $table->string('calorias');
            $table->string('edadMetabolica');
            $table->string('pesoOseo');
            $table->string('imc');

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
        Schema::dropIfExists('controlesPesos');
    }
}
