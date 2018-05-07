<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesToxinasBotulinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesToxinasBotulinicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('toxinaBotulinica_id')->unsigned();
            $table->string('region');
            $table->string('unidades');

            //Llaves Foraneas
            $table->foreign('toxinaBotulinica_id')->references('id')->on('toxinasBotulinicas');
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
        Schema::dropIfExists('detallesToxinasBotulinicas');
    }
}
