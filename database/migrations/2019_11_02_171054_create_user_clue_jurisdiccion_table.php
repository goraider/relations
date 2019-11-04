<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserClueJurisdiccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('user_clue_jurisdiccion', function (Blueprint $table) {

            $table->bigInteger('users_id')->unsigned()->index();
            $table->string('clues_clues');
            $table->bigInteger('jurisdicciones_id')->unsigned()->index();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('clues_clues')->references('clues')->on('clues')->onDelete('cascade');
            $table->foreign('jurisdicciones_id')->references('id')->on('jurisdicciones')->onDelete('cascade');


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
        Schema::dropIfExists('user_clue_jurisdiccion');
    }
}
