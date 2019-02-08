<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tournament_id')->unsigned();
            $table->string('point_team1');
            $table->string('point_team2');
            $table->string('point_team3');
            $table->string('point_team4');
            $table->string('point_team5');
            $table->string('point_team6');
            $table->string('point_team7');
            $table->string('point_team8');
            $table->string('point_team9');
            $table->string('point_team10');
            $table->string('point_team11');
            $table->string('point_team12');
            $table->string('point_team13');
            $table->string('point_team14');
            $table->string('point_team15');
            $table->string('point_team16');
            $table->string('point_team17');
            $table->string('point_team18');
            $table->string('point_team19');
            $table->string('point_team20');
            $table->string('point_team21');
            $table->string('point_team22');
            $table->string('point_team23');
            $table->string('point_team24');
            $table->string('point_team25');
            $table->string('point_per_kill');
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
        Schema::dropIfExists('points');
    }
}
