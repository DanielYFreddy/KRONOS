<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesHeredoFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentesHeredoFamiliares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->enum('diabetes',['s','n'])->default('n');
            $table->enum('presionAlta',['s','n'])->default('n');
            $table->enum('cancer',['s','n'])->default('n');
            $table->enum('enfermedadCorazon',['s','n'])->default('n');
            $table->enum('enfermedadRenal',['s','n'])->default('n');
            $table->enum('asma',['s','n'])->default('n');
            $table->enum('artritis',['s','n'])->default('n');
            $table->mediumText('otros');

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
        Schema::dropIfExists('antecedentesHeredoFamiliares');
    }
}
