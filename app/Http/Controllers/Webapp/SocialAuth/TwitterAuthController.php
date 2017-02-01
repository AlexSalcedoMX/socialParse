<?php

namespace App\Http\Controllers\Webapp\SocialAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;

class TwitterAuthController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProviderCallback()
    {
        $usuario = $this->req->user();
        $network = Socialite::driver('twitter')->user();
        $uid = $network->getId();

        $social = collect($network->user);

        $where = [ 'usuario_id' => $usuario->id, 'uid' => $uid ];
        $data  = [
            'nombre'  => $network->getName(),
            'usuario' => $network->getNickname(),
            'avatar'  => $network->getAvatar(),
            'verificado'   => $social->get('verified'),
            'access_token' => $network->token,
            'access_token_secret' => $network->tokenSecret,
        ];

        $usuario->getCuentasTwitter()->updateOrCreate($where, $data);

        return redirect()->route('webapp.index');
    }
}
