<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class match_schedule extends Model
{
    //use HasFactory;
    protected $fillable = ['match_full_name','match_short_name','team1_id','team2_id','fantasy_match_id','fantasy_match_status','match_completed_status','match_date','match_time'];
}
