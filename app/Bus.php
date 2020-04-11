<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    //
    protected $fillable = [
        'name', 'operator', 'seat_row','seat_column','location',
    ];
}
