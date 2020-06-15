<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Match;

class Team extends Model
{

    protected $fillable = [
        'team_name',
   ]; 

    public function Matches()
    {
        return $this->hasMany('App\Match');
    }

}
