<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
     protected $fillable = [
        'events_id', 'peso',
    ];
}
