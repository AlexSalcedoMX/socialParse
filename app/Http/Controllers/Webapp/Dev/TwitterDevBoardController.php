<?php

namespace App\Http\Controllers\Webapp\Dev;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TwitterDevBoardController extends Controller
{
    public function __contruct(Request $request)
    {
        $this->req = $request;
    }

    public function index()
    {
        return view('webapp.board.dev');
    }
}
