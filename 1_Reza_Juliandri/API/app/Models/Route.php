<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'route';
    protected $fillable = [
        'from_place_id',
        'to_place_id',
        'schedule_id'
    ];
}
