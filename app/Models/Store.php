<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'city',
        'address1',
        'address2',
        'price',
        'start_time',
        'end_time',
        'rest_start_time',
        'rest_end_time',
        'menu',
        'introduction',
        'url',
        'tel',
    ];
}
