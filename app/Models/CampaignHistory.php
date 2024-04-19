<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignHistory extends Model
{
    use HasFactory;

    protected $fillable =[ 
        'campaign_id',
        'campaign_name',
        'title',
        'content',
        'created_by'
    ];
}
