<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tournament_id')->unsigned();
            $table->string('match');
            $table->string('ranking_name_1', 50)->nullable();
            $table->string('ranking_name_2', 50)->nullable();
            $table->string('ranking_name_3', 50)->nullable();
            $table->string('ranking_name_4', 50)->nullable();
            $table->string('ranking_name_5', 50)->nullable();
            $table->string('ranking_name_6', 50)->nullable();
            $table->string('ranking_name_7', 50)->nullable();
            $table->string('ranking_name_8', 50)->nullable();
            $table->string('ranking_name_9', 50)->nullable();
            $table->string('ranking_name_10', 50)->nullable();
            $table->string('ranking_name_11', 50)->nullable();
            $table->string('ranking_name_12', 50)->nullable();
            $table->string('ranking_name_13', 50)->nullable();
            $table->string('ranking_name_14', 50)->nullable();
            $table->string('ranking_name_15', 50)->nullable();
            $table->string('ranking_name_16', 50)->nullable();
            $table->string('ranking_name_17', 50)->nullable();
            $table->string('ranking_name_18', 50)->nullable();
            $table->string('ranking_name_19', 50)->nullable();
            $table->string('ranking_name_20', 50)->nullable();
            $table->string('ranking_name_21', 50)->nullable();
            $table->string('ranking_name_22', 50)->nullable();
            $table->string('ranking_name_23', 50)->nullable();
            $table->string('ranking_name_24', 50)->nullable();
            $table->string('ranking_name_25', 50)->nullable();
            $table->string('ranking_point_1', 50)->nullable();
            $table->string('ranking_point_2', 50)->nullable();
            $table->string('ranking_point_3', 50)->nullable();
            $table->string('ranking_point_4', 50)->nullable();
            $table->string('ranking_point_5', 50)->nullable();
            $table->string('ranking_point_6', 50)->nullable();
            $table->string('ranking_point_7', 50)->nullable();
            $table->string('ranking_point_8', 50)->nullable();
            $table->string('ranking_point_9', 50)->nullable();
            $table->string('ranking_point_10', 50)->nullable();
            $table->string('ranking_point_11', 50)->nullable();
            $table->string('ranking_point_12', 50)->nullable();
            $table->string('ranking_point_13', 50)->nullable();
            $table->string('ranking_point_14', 50)->nullable();
            $table->string('ranking_point_15', 50)->nullable();
            $table->string('ranking_point_16', 50)->nullable();
            $table->string('ranking_point_17', 50)->nullable();
            $table->string('ranking_point_18', 50)->nullable();
            $table->string('ranking_point_19', 50)->nullable();
            $table->string('ranking_point_20', 50)->nullable();
            $table->string('ranking_point_21', 50)->nullable();
            $table->string('ranking_point_22', 50)->nullable();
            $table->string('ranking_point_23', 50)->nullable();
            $table->string('ranking_point_24', 50)->nullable();
            $table->string('ranking_point_25', 50)->nullable();
            $table->string('ranking_kill_1', 50)->nullable();
            $table->string('ranking_kill_2', 50)->nullable();
            $table->string('ranking_kill_3', 50)->nullable();
            $table->string('ranking_kill_4', 50)->nullable();
            $table->string('ranking_kill_5', 50)->nullable();
            $table->string('ranking_kill_6', 50)->nullable();
            $table->string('ranking_kill_7', 50)->nullable();
            $table->string('ranking_kill_8', 50)->nullable();
            $table->string('ranking_kill_9', 50)->nullable();
            $table->string('ranking_kill_10', 50)->nullable();
            $table->string('ranking_kill_11', 50)->nullable();
            $table->string('ranking_kill_12', 50)->nullable();
            $table->string('ranking_kill_13', 50)->nullable();
            $table->string('ranking_kill_14', 50)->nullable();
            $table->string('ranking_kill_15', 50)->nullable();
            $table->string('ranking_kill_16', 50)->nullable();
            $table->string('ranking_kill_17', 50)->nullable();
            $table->string('ranking_kill_18', 50)->nullable();
            $table->string('ranking_kill_19', 50)->nullable();
            $table->string('ranking_kill_20', 50)->nullable();
            $table->string('ranking_kill_21', 50)->nullable();
            $table->string('ranking_kill_22', 50)->nullable();
            $table->string('ranking_kill_23', 50)->nullable();
            $table->string('ranking_kill_24', 50)->nullable();
            $table->string('ranking_kill_25', 50)->nullable();
            $table->string('ranking_result_1', 50)->nullable();
            $table->string('ranking_result_2', 50)->nullable();
            $table->string('ranking_result_3', 50)->nullable();
            $table->string('ranking_result_4', 50)->nullable();
            $table->string('ranking_result_5', 50)->nullable();
            $table->string('ranking_result_6', 50)->nullable();
            $table->string('ranking_result_7', 50)->nullable();
            $table->string('ranking_result_8', 50)->nullable();
            $table->string('ranking_result_9', 50)->nullable();
            $table->string('ranking_result_10', 50)->nullable();
            $table->string('ranking_result_11', 50)->nullable();
            $table->string('ranking_result_12', 50)->nullable();
            $table->string('ranking_result_13', 50)->nullable();
            $table->string('ranking_result_14', 50)->nullable();
            $table->string('ranking_result_15', 50)->nullable();
            $table->string('ranking_result_16', 50)->nullable();
            $table->string('ranking_result_17', 50)->nullable();
            $table->string('ranking_result_18', 50)->nullable();
            $table->string('ranking_result_19', 50)->nullable();
            $table->string('ranking_result_20', 50)->nullable();
            $table->string('ranking_result_21', 50)->nullable();
            $table->string('ranking_result_22', 50)->nullable();
            $table->string('ranking_result_23', 50)->nullable();
            $table->string('ranking_result_24', 50)->nullable();
            $table->string('ranking_result_25', 50)->nullable();
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
        Schema::dropIfExists('results');
    }
}
