<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesPersonalesNoPatologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentesPersonalesNoPatologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tabaco', ['s', 'n'])->Default('n');
            $table->enum('alcohol', ['s', 'n'])->Default('n');
            $table->enum('drogas', ['s', 'n'])->Default('n');
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
        Schema::dropIfExists('antecedentesPersonalesNoPatologicos');
    }
}
