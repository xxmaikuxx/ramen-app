<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store_vacation extends Model
{
    use HasFactory;

    protected $table = 'store_vacation';

    protected $fillable = [
        'day_of_week',
    ];

}
