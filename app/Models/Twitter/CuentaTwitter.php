<?php

namespace App\Models\Twitter;

use Illuminate\Database\Eloquent\Model;

class CuentaTwitter extends Model
{
    protected $table = 'cuenta_twitter';
    protected $fillable = [
        'usuario_id',
        'uid',
        'nombre',
        'usuario',
        'avatar',
        'verificado',
        'activo',
        'access_token',
        'access_token_secret'
    ];

    protected $hidden = [
        'access_token',
        'access_token_secret'
    ];
}
