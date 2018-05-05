<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenesFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenesFisicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->string('presionArterial');
            $table->string('temperatura');
            $table->string('frecuenciaCardiaca');
            $table->string('hidratacion');
            $table->string('peso');
            $table->string('orl');
            $table->string('cuello');
            $table->string('torax');
            $table->string('abdomen');
            $table->string('extremidades');
            $table->string('neurologico');
            $table->date('fecha');
    
            //Llaves Foraneas
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            
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
        Schema::dropIfExists('examenesFisicos');
    }
}
