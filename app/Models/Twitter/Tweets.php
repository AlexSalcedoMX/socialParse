<?php

namespace App\Models\Twitter;

use Illuminate\Database\Eloquent\Model;

class Tweets extends Model
{
    protected $table = 'tweets';
    protected $fillable = [
        'uuid',
        'username',
        'nombre',
        'avatar',
        'verified',
        'text'
    ];
}
