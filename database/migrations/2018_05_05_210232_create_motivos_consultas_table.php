<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotivosConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivosConsultas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('paciente_id')->unsigned();
            $table->integer('examenFisico_id')->unsigned();
            $table->string('motivoConsulta');
            $table->string('diagnostico');
            $table->string('plan');
            $table->date('fecha');
    
            //Llaves Foraneas
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('examenFisico_id')->references('id')->on('examenesFisicos');
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
        Schema::dropIfExists('motivosConsultas');
    }
}
