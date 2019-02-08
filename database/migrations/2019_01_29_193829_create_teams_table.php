<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tournament_id')->unsigned();
            $table->string('team1');
            $table->string('team2');
            $table->string('team3');
            $table->string('team4');
            $table->string('team5');
            $table->string('team6');
            $table->string('team7');
            $table->string('team8');
            $table->string('team9');
            $table->string('team10');
            $table->string('team11');
            $table->string('team12');
            $table->string('team13');
            $table->string('team14');
            $table->string('team15');
            $table->string('team16');
            $table->string('team17');
            $table->string('team18');
            $table->string('team19');
            $table->string('team20');
            $table->string('team21');
            $table->string('team22');
            $table->string('team23');
            $table->string('team24');
            $table->string('team25');
            $table->timestamps();

            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
