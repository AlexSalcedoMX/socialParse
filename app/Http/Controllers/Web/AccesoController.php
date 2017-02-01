<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AccesoController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo   = '/webapp';
    protected $redirectPath = '/webapp';
    protected $loginPath    = '/';

    public function __construct(Request $request)
    {
        $this->req = $request;
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index()
    {
        $fingerprint =  $this->req->fingerprint();
        $args = compact('fingerprint');
        return view('web.acceso', $args);
    }

    public function acceso()
    {
        $this->validate($this->req, [
            'email'    => 'required|min:4|max:255',
            'password' => 'required|min:4|max:255'
        ]);

        $credenciales = [
            'email'    => $this->req->get('email'),
            'password' => $this->req->get('password')
        ];

        if (Auth::attempt( $credenciales )) {
            // Authentication passed...
            return redirect()->intended('app');
        }

        return redirect()->back();
    }
}
