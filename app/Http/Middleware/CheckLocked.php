<?php

namespace App\Http\Middleware;

use Closure;

class CheckLocked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $u = $request->user();
        $rname = $request->route()->getName();
        $perm  = ['account.locked'];

        $passed = in_array($rname, $perm);

        if ($u->locked && !$passed) {
            return redirect()->route('account.locked');
        }

//elseif($u->fingerprint != $request->fingerprint()){
//
//            dd(
//                $u->fingerprint,
//                $request->fingerprint()
//            );
//            $u->locked = true;
//            $u->save();
//        }

        return $next($request);
    }
}
