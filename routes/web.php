<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('game.top');
});


use App\Http\Controllers\GameController;
Route::controller(GameController::class)->prefix('game')->name('game.')->group(function () {
    Route::get('search', 'search')->middleware('auth')->name('search');
    Route::get('top', 'top')->name('top');// ユーザ認証（ログイン）しなくても表示したい
    Route::get('results', 'results')->middleware('auth')->name('results');
    // Route::get('register', 'register')->name('register');
    Route::get('detail', 'detail')->middleware('auth')->name('details');
    // 情報登録機能については、しっかりと見直しておく
    Route::get('create', 'add')->middleware('auth')->name('add');
    Route::post('create', 'create')->middleware('auth')->name('create');
    Route::get('', 'index')->name('index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
