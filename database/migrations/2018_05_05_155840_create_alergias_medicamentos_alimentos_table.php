<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlergiasMedicamentosAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alergiasMedicamentosAlimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('estado',['s','n'])->default('n');
            $table->mediumText('informacion');
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
        Schema::dropIfExists('alergiasMedicamentosAlimentos');
    }
}
