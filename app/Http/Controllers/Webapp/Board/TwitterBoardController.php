<?php

namespace App\Http\Controllers\Webapp\Board;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TwitterBoardController extends Controller
{
    public function __contruct(Request $request)
    {
        $this->req = $request;
    }

    public function index($campaign)
    {
        $args = compact('campaign');
        return view('webapp.board.twitter.index', $args);
    }
}
