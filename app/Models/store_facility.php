<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store_facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility',
    ];
}
