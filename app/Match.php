<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Match extends Model
{
    protected $fillable = [
         'status', 'points'
    ];

    public function teams(){
        return $this->belongsTo('App\Team');
    }
}
