<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_teams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('player_id')->unsigned();
            $table->bigInteger('match_id')->unsigned();
            $table->integer('captain_status');
            $table->integer('vice_captain_status');
            $table->timestamps();
            

            
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            
            $table->foreign('player_id')
            ->references('id')->on('player_lists')
            ->onDelete('cascade');

            
            $table->foreign('match_id')
            ->references('id')->on('match_schedules')
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
        Schema::dropIfExists('user_teams');
    }
}
