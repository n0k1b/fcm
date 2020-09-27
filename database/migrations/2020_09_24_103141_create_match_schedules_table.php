<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('match_full_name');
            $table->string('match_short_name');
            $table->bigInteger('team1_id')->unsigned();
            $table->bigInteger('team2_id')->unsigned();
            $table->string('fantasy_match_id')->nullable();
            $table->integer('fantasy_match_status')->default(0);
            $table->integer('match_completed_status')->default(0);
            $table->string('match_date');
            $table->string('match_time');
            $table->timestamps();

            $table->foreign('team1_id')
            ->references('id')->on('team_lists')
            ->onDelete('cascade');

            $table->foreign('team2_id')
            ->references('id')->on('team_lists')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_schedules');
    }
}
