<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToxinasBotulinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toxinasBotulinicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motivoConsulta_id')->unsigned();
            $table->date('fechaAplicacion');
            $table->date('fechaVencimiento');
            $table->string('numeroLote');
            $table->string('nombreToxina');
            $table->string('dilucion');
            $table->string('totalUnidades');
            $table->mediumText('observaciones');

            //Llaves Foraneas
            $table->foreign('motivoConsulta_id')->references('id')->on('motivosConsultas');
            $table->timestamps();

        });

        DB::statement("ALTER TABLE toxinasBotulinicas ADD archivo LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toxinasBotulinicas');
    }
}
