<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matchdetails extends Model
{
    protected $fillable = [
        'home_team', 'away_team', 'date', 'score_home_team', 'score_away_team'
   ];

  
   
}
