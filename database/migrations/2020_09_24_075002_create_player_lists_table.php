<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_lists', function (Blueprint $table) {
           
            $table->id();
            $table->string('player_full_name');
            $table->string('player_short_name');
            $table->string('player_fantasy_id')->nullable();
            $table->string('player_category');
            $table->integer('player_price')->nullable();
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
        Schema::dropIfExists('player_lists');
    }
}
