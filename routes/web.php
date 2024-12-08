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
    return view('welcome');
});


use App\Http\Controllers\Admin\GameController;
Route::controller(GameController::class)->prefix('admin/game')->name('admin.game.')->group(function () {
    Route::get('search', 'search')->middleware('auth')->name('search');
    Route::get('top', 'top')->name('top');// ユーザ認証（ログイン）しなくても表示したい
    Route::get('results', 'results')->middleware('auth')->name('results');
    // Route::get('register', 'register')->name('register');
    Route::get('details', 'details')->middleware('auth')->name('details');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
