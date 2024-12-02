<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    // 以下を追記
    public function search()
    {
        return view('admin.game.search');
    }
    
    public function results(Request $request)
    {
        return view('admin/game/results');
    }
    
    public function top(Request $request)
    {
        return view('admin/game/top');
    }
    
    public function register(Request $request)
    {
        return view('admin/game/register');
    }
    
    public function details(Request $request)
    {
        return view('admin/game/details');
    }
}
