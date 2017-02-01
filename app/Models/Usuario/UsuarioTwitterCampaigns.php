<?php

namespace App\Models\Usuario;

use App\Models\Twitter\TwitterCampaigns;
use Illuminate\Database\Eloquent\Model;

class UsuarioTwitterCampaigns extends Model
{
    protected $table = 'usuarios_twitter_campaigns';
    protected $fillable = [
        'usuario_id',
        'twitter_campaign_id',
        'activo',
        'alias'
    ];

    public function getCampaign()
    {
        return $this->belongsTo(TwitterCampaigns::class, 'twitter_campaign_id');
    }
}
