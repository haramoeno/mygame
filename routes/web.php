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
Route::controller(GameController::class)->prefix('admin')->name('admin')->middleware('auth')->group(function () {
    Route::get('game/search', 'search')->middleware('auth');
    Route::get('game/top', 'top')->name('game.top');
    Route::get('game/results', 'results')->middleware('auth');
    Route::get('game/register', 'register')->name('game.register');
    Route::get('game/details', 'details')->middleware('auth');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
