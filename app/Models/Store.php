<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'address1',
        'address2',
        'menu',
        'introduction',
        'url',
        'tel',
    ];
}
