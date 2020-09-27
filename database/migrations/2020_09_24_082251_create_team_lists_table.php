<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_lists', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->bigInteger('league_id')->unsigned();
            $table->timestamps();
            $table->foreign('league_id')
            ->references('id')->on('global_leagues')
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
        Schema::dropIfExists('team_lists');
    }
}
