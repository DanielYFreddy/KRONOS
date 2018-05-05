<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->integer('antecedenteHeredoFamiliar_id')->unsigned();
            $table->integer('antecedentePersonalPatologico_id')->unsigned();
            $table->integer('antecedentePersonalNoPatologico_id')->unsigned();
            $table->integer('alergiaMedicamentoAlimento_id')->unsigned();
            $table->integer('cirugia_id')->unsigned();

            //Llaves Foraneas
            $table->foreing('paciente_id')->references('id')->on('Pacientes');
            $table->foreing('antecedenteHeredoFamiliar_id')->references('id')->on('antecedentesHeredoFamiliares_id')
            $table->foreing('antecedentePersonalPatologico_id')->references('id')->on('antecedentesPersonalesPatologicos_id')
            $table->foreing('antecedentePersonalNoPatologico_id')->references('id')->on('antecedentesPersonalesNoPatologicos_id')
            $table->foreing('alergiaMedicamentoAlimento_id')->references('id')->on('alergiasMedicamentosAlimentos_id')
            $table->foreing('cirugia_id')->references('id')->on('cirugias')

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
        Schema::dropIfExists('historiales');
    }
}
