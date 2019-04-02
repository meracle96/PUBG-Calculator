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
            $table->string('point_team1')->nullable();
            $table->string('point_team2')->nullable();
            $table->string('point_team3')->nullable();
            $table->string('point_team4')->nullable();
            $table->string('point_team5')->nullable();
            $table->string('point_team6')->nullable();
            $table->string('point_team7')->nullable();
            $table->string('point_team8')->nullable();
            $table->string('point_team9')->nullable();
            $table->string('point_team10')->nullable();
            $table->string('point_team11')->nullable();
            $table->string('point_team12')->nullable();
            $table->string('point_team13')->nullable();
            $table->string('point_team14')->nullable();
            $table->string('point_team15')->nullable();
            $table->string('point_team16')->nullable();
            $table->string('point_team17')->nullable();
            $table->string('point_team18')->nullable();
            $table->string('point_team19')->nullable();
            $table->string('point_team20')->nullable();
            $table->string('point_team21')->nullable();
            $table->string('point_team22')->nullable();
            $table->string('point_team23')->nullable();
            $table->string('point_team24')->nullable();
            $table->string('point_team25')->nullable();
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
