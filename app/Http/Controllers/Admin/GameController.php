<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    // 以下を追記
    public function add()
    {
        return view('admin.game.create');
    }
    
    public function search(Request $request)
    {
        return view('admin/game/search');
    }
    
    public function top(Request $request)
    {
        return view('admin/game/top');
    }
}
