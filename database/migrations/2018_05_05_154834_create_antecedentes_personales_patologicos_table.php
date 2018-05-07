<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesPersonalesPatologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentesPersonalesPatologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->enum('diabetes', ['s', 'n'])->Default('n');
            $table->enum('presionAlta', ['s', 'n'])->Default('n');
            $table->enum('cancer', ['s', 'n'])->Default('n');
            $table->enum('enfermedadCorazon', ['s', 'n'])->Default('n');
            $table->enum('enfermedadRenal', ['s', 'n'])->Default('n');
            $table->enum('asma', ['s', 'n'])->Default('n');
            $table->enum('artritis', ['s', 'n'])->Default('n');
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
        Schema::dropIfExists('antecedentesPersonalesPatologicos');
    }
}
