<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class current_game extends Model
{
    protected $fillable = ['match_id','team_id','player_id','four','six','run','ball','over_done','wicket','given_run','maiden','wide','no_ball','catch','stumping','point','man_of_the_match','match_completed'];
}
