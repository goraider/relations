<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCluesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clues', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('clues', 12)->primary()->comment('CLave Unica de Establecimientos de Salud');
            $table->string('domicilio', 200)->comment('Direccion de la unidad de salud, calle, numero, colonia, ciudad o municipio.');
			$table->integer('codigoPostal');
			$table->float('numeroLongitud', 10, 0)->nullable();
			$table->float('numeroLatitud', 10, 0)->nullable();
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
        Schema::dropIfExists('clues');
    }
}
