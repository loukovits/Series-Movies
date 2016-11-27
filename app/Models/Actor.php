<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Actor extends Model
{
    protected $table='actors';
    protected $fillable = [
        'first_name',
        'last_name',
        'born_day',
        'slug',
        'description'
    ];

}