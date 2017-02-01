<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LockedController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function index($accion = null)
    {
        if(!is_null($accion)){
            $usuario = $this->req->user();

            if($accion == 'cerrar-sesion'){
                $usuario->locked = false;
                $usuario->save();
                Auth::logout();

                return redirect('/');
            }elseif ($accion == 'unlock-account'){

                $usuario->fingerprint = $this->req->fingerprint();
                $usuario->locked = false;
                $usuario->save();

                return redirect()->route('webapp.index');
            }
        }

        return view('webapp.locked.index');
    }
}
