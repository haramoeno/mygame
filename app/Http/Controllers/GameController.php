<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Game;

class GameController extends Controller
{
    // 以下を追記
    /**
     * 検索（入力フォーム）画面表示アクション
     */
    public function search()
    {
        return view('game.search');
        //     ^^^^ view() で画面を表示する
    }
    
    /**
     * 検索結果画面表示アクション
     */
    public function results(Request $request)
    {
        return view('game.results');
    }
    
    /**
     * トップ画面表示アクション
     */
    public function top(Request $request)
    {
        return view('game.top');
    }
    
    /**
     * ゲーム情報登録（入力フォーム）画面表示アクション
     */
    //public function register(Request $request)
    //{
    //    return view('game.register');
    //}
    
    /**
     * ゲーム情報詳細画面表示アクション
     */
    public function detail(Request $request)
    {
        return view('game.detail');
    }
    
    /**
     * ゲーム情報（データベース）登録アクション
     * method: POST
     * 入力画面を別のアクションで用意する
     */
    public function create(Request $request)
    {
        
        $this->validate($request, Game::$rules);
        
        $game = new Game;
        $form = $request->all();
        
        
        unset($form['_token']);
        
        $game->fill($form);
        $game->save();
        
        
    
        return redirect('game/create');// 画面表示ではなく、リダイレクトなどで別ページに移動する方が良い
    
    }
    
    public function add()
    {
        return view('game.create');
    }
}
