<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RedesSocialesController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function index()
    {
        $usuario   = $this->req->user();
        $cuentasTw = $usuario->getCuentasTwitter;
        $args      = compact('cuentasTw');
        return view('webapp.redesSociales.index', $args);
    }
}
