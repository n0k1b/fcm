<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_team extends Model
{
    protected $fillable = ['user_id','player_id','match_id','captain_status','vice_captain_status'];
}
