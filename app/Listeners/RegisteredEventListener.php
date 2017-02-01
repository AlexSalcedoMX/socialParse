<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RegisteredEventListener
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
     * @param  IlluminateAuthEventsRegistered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $fpclient = $this->req->get('fingerprint');

        $event->user->fingerprint = $fpclient;
        $event->user->last_login_at = Carbon::now()->format('Y-m-d H:i:s');
        $event->user->save();
    }
}
