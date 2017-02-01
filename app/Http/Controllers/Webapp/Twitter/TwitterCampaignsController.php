<?php

namespace App\Http\Controllers\Webapp\Twitter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\RedisTwitterUserSubscribe;
use Illuminate\Support\Facades\Redis;
use App\Models\Twitter\TwitterCampaigns;

class TwitterCampaignsController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function index()
    {
        $campaigns = $this->req->user()->getCampaignsTwitter;

        $args = compact('campaigns');
        return view('webapp.twitter.campanias.index', $args);
    }

    public function createCampaign()
    {
        $this->validate($this->req, [
            'track' => 'required|min:1|max:255',
            'tipo'  => 'required|min:1|max:255',
        ]);

        $track      = $this->req->get('track');
        $tipo       = $this->req->get('tipo');
        $trackHuman = strtolower($track);
        $campaign   = TwitterCampaigns::where([ 'track' => $trackHuman ])->get()->first();
        $prefix     = ($tipo == 'username') ? '@' : '#';

        if(is_null($campaign)){
            $room = $tipo.":".str_replace(['#','@'], '', $trackHuman);
            $campaign = TwitterCampaigns::create([ 'track' => $trackHuman , 'room'=>$room ]);
            //This works wuuuuuju!
            event(new RedisTwitterUserSubscribe( $trackHuman ));
        }

        $usuario = $this->req->user();
        $tracked = $usuario
                    ->getCampaignsTwitter()
                    ->where('twitter_campaign_id', $campaign->id)
                    ->get()
                    ->first();

        if(is_null($tracked)){
            $usuario
                ->getCampaignsTwitter()
                ->create([
                    'twitter_campaign_id' => $campaign->id,
                    'alias' => $track
                ]);
        }

        return redirect()->route('twitter.dev.board');
    }
}
