<?php

namespace App\Models\Usuario;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'password',
        'activo',
        'fingerprint',
        'ip',
        'locked',
        'last_login_at',
        'logged_out_at'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function getCuentasTwitter()
    {
        return $this->hasMany(\App\Models\Twitter\CuentaTwitter::class);
    }

    public function getCampaignsTwitter()
    {
        return $this->hasMany(\App\Models\Usuario\UsuarioTwitterCampaigns::class);
    }
}
