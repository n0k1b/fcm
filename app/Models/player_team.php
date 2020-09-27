<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player_team extends Model
{
    protected $fillable = ['player_id','team_id'];
}
