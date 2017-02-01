<?php

namespace App\Listeners;

use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class LoginEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    /**
     * Handle the event.
     *
     * @param  LoginEvent  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $fpstored = $event->user->fingerprint;
        $fpclient = $this->req->get('fingerprint');

        $event->user->last_login_at = Carbon::now()->format('Y-m-d H:i:s');

        if(is_null($fpstored)){
            $event->user->fingerprint = $fpclient;
            $event->user->locked = false;
        }else{
            if($fpclient != $fpstored){
                $event->user->locked = true;
            }
        }

        $event->user->save();
    }
}
