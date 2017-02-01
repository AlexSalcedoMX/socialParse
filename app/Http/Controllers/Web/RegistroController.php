<?php

namespace App\Http\Controllers\Web;

use App\Models\Usuario\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use Auth;

class RegistroController extends Controller
{
    use RegistersUsers;

    protected $redirectTo   = '/webapp';
    protected $redirectPath = '/webapp';
    protected $loginPath    = '/';

    public function __construct(Request $request)
    {
        $this->req = $request;
        $this->middleware('guest');
    }

    public function index()
    {
        $fingerprint =  $this->req->fingerprint();
        $args = compact('fingerprint');
        return view('web.registro', $args);
    }

    public function registro()
    {
        $this->validate($this->req, [
            'email'     =>'required|min:1|max:255|email|unique:usuarios',
            'password'  =>'required|min:4|max:255',
            'nombre'    =>'required|min:1|max:255',
            'apellidos' =>'required|min:4|max:255',
            'tos' =>'required|min:1|max:1',
            'fingerprint' => 'required|min:5|max:255'
        ]);

        $usuario = self::crear($this->req->all(), $this->req->ip());

        Auth::login($usuario);

        return redirect()->intended('app');

    }

    protected function crear(array $data, $ip = null)
    {
        unset($data['tos']);

        $data['password'] = bcrypt($data['password']);
        $data['ip'] = $ip;

        return Usuario::create($data);
    }
}
