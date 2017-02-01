<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HelpersController extends Controller
{
    public function __construct()
    {

    }

    public function cerrarSesion()
    {
        Auth::logout();

        return redirect('/');
    }
}
