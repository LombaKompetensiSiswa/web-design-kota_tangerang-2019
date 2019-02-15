<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedule";
    protected $fillable = [
        'id',
        'type',
        'line',
        'from_place_id',
        'to_place_id',
        'departure_time',
        'arrival_time',
        'distance',
        'speed'
    ];

    public function fromPlace(){
        return $this->hasOne('App\Models\Place', 'id','from_place_id');
    }
    
    public function toPlace(){
        return $this->hasOne('App\Models\Place', 'id', 'to_place_id');
    }
}
