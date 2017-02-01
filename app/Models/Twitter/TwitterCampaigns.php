<?php

namespace App\Models\Twitter;

use Illuminate\Database\Eloquent\Model;

class TwitterCampaigns extends Model
{
    protected $table    = 'twitter_campaigns';
    protected $fillable = [
        'track',
        'room'
    ];
}
