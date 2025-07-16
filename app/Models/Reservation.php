<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'date',
        'time',
        'service',
        'note',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
