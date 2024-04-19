<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable =[ 
        'code',
        'donor_name',
        'donor_phone',
        'donor_address',
        'wallet_id',
        'campaign_id',
        'total_funded',
        'status',
        'verified_by'
    ];
}
