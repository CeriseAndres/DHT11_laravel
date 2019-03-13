<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donnee extends Model
{
    protected $fillable = [
        'date', 'temperature', 'humidite',
    ];
}
