<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable =[ 
        'name',
        'target_fund',
        'date_end',
        'address',
        'lat',
        'long',
        'images',
        'description',
        'status_funded',
        'status',
        'created_by'
    ];
}
