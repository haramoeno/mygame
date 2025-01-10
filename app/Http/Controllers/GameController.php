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
        $game = Game::find($request->id);
        if (empty($game)) {
            abort(404);
        }
        return view('game.detail', ['game_form' => $game]);
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
    
    
    public function index(Request $request)
    {
        $query = Game::query();
        // $query = Game::where('id', '!=', 0);

        // cond_title
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // タイトルに指定があった場合
            
            $query->where('title', 'LIKE', "%{$cond_title}%");
        }

        // cond_genre
        $cond_genre = $request->cond_genre;
        if ($cond_genre != '') {
            // ジャンルに指定があった場合
            
            $query->where('genre', 'LIKE', "%{$cond_genre}%");
        }
        
        $cond_playstyle = $request->cond_playstyle;
         if ($cond_playstyle != '') {
             
             $query->where('playstyle', 'LIKE', "%{$cond_playstyle}%");
        }
        
        $cond_platform = $request->cond_platform;
        if ($cond_platform != '') {
            
            $query->where('platform', 'LIKE', "%{$cond_platform}%");
        }

        $posts = $query->get();
        // if ($cond_title != '' && $cond_genre != '') {
        //     // タイトルもジャンルも指定があった場合
        //     $posts = Game::where(
        //         'title', 'LIKE', "%{$cond_title}%"
        //     )->where(
        //         'genre', 'LIKE', "%{$cond_genre}%"
        //     )->get();
        // } elseif ($cond_title != '') {
        //     // タイトルに指定があった場合
            
        //     $posts = Game::where('title', 'LIKE', "%{$cond_title}%")->get();
        // } elseif ($cond_genre != '') {
        //     // ジャンルに指定があった場合
            
        //     $posts = Game::where('genre', 'LIKE', "%{$cond_genre}%")->get();
        // } else {
            
        //     $posts = Game::all();
        // }
        return view('game.index', ['posts' => $posts, 'cond_title' => $cond_title, 
                                   'cond_genre' => $cond_genre, 'cond_playstyle' => $cond_playstyle,
                                   'cond_platform' => $cond_platform]);
        
        
        // $cond_genre = $request->cond_genre;
        // if ($cond_genre != '') {
            
        //     $posts = Game::where('genre', 'LIKE', "%{cond_genre}%")->get();
        // } else {
            
        //     $posts = Game::all();
        // } 
        // return view('game.index', ['posts' => $posts, 'cond_genre' => $cond_genre]);
    }
        
    public function edit(Request $request)
    {
        $game = Game::find($request->id);
        if (empty($game)) {
            abort(404);
        }
        return view('game.edit', ['game_form' => $game]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Game::$rules);
        
        $game = Game::find($request->id);
        
        $game_form = $request->all();
        unset($game_form['_token']);
        
        $game->fill($game_form)->save();
        
        return redirect('game');
    }
    
    public function delete(Request $request)
    {
        $game = Game::find($request->id);
        
        $game->delete();
        
        return redirect('game/');
    }
    
    }
