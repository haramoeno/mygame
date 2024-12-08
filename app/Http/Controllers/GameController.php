<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    // 以下を追記
    public function search()
    {
        return view('game.search');
    }
    
    public function results(Request $request)
    {
        return view('game/results');
    }
    
    public function top(Request $request)
    {
        return view('game.top');
    }
    
    //public function register(Request $request)
    //{
    //    return view('game.register');
    //}
    
    public function detail(Request $request)
    {
        return view('game.detail');
    }
}
