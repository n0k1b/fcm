<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_games', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('match_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();
            $table->bigInteger('player_id')->unsigned();
            $table->integer('four')->default(0);
            $table->integer('six')->default(0);
            $table->integer('run')->default(0);
            $table->integer('ball')->default(0);
            $table->integer('over_done')->default(0);
            $table->integer('wicket')->default(0);
            $table->integer('given_run')->default(0);
            $table->integer('maiden')->default(0);
            $table->integer('wide')->default(0);
            $table->integer('no_ball')->default(0);
            $table->integer('catch')->default(0);
            $table->integer('stumping')->default(0);
            $table->integer('point')->default(0);
            $table->integer('man_of_the_match')->default(0);
            $table->integer('match_completed')->default(0);
            $table->timestamps();

            $table->foreign('match_id')
            ->references('id')->on('match_schedules')
            ->onDelete('cascade');

            $table->foreign('team_id')
            ->references('id')->on('team_lists')
            ->onDelete('cascade');

            $table->foreign('player_id')
            ->references('id')->on('player_lists')
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
        Schema::dropIfExists('current_games');
    }
}
