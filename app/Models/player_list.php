<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player_list extends Model
{
  protected $fillable = ['player_full_name','player_short_name','player_fantasy_id','player_category','player_price'];
}
