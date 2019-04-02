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
            $table->string('team1')->nullable();
            $table->string('team2')->nullable();
            $table->string('team3')->nullable();
            $table->string('team4')->nullable();
            $table->string('team5')->nullable();
            $table->string('team6')->nullable();
            $table->string('team7')->nullable();
            $table->string('team8')->nullable();
            $table->string('team9')->nullable();
            $table->string('team10')->nullable();
            $table->string('team11')->nullable();
            $table->string('team12')->nullable();
            $table->string('team13')->nullable();
            $table->string('team14')->nullable();
            $table->string('team15')->nullable();
            $table->string('team16')->nullable();
            $table->string('team17')->nullable();
            $table->string('team18')->nullable();
            $table->string('team19')->nullable();
            $table->string('team20')->nullable();
            $table->string('team21')->nullable();
            $table->string('team22')->nullable();
            $table->string('team23')->nullable();
            $table->string('team24')->nullable();
            $table->string('team25')->nullable();
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
