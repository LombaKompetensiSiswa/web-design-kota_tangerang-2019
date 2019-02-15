<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'place';
    protected $fillable = [
        'id',
        'name',
        'latitude',
        'longitude',
        'x',
        'y',
        'image_path',
        'description'
    ];
}
