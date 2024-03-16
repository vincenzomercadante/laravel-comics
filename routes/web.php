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
    $menus = config('db.menus');
    $comics = config('db.comics');
    return view('home', compact('menus', 'comics'));
}) ->name('comics');

Route::get('/characters', function () {
    $menus = config('db.menus');
    
    
    return view('characters', compact('menus' ));
}) ->name('characters');

Route::get('/movies', function () {
    $menus = config('db.menus');
    return view('movies', compact('menus'));
}) ->name('movies');


Route::get('/tv', function () {
    $menus = config('db.menus');
    return view('tv', compact('menus'));
}) ->name('tv');


Route::get('/games', function () {
    $menus = config('db.menus');
    return view('games', compact('menus'));
}) ->name('games');


Route::get('/collectibles', function () {
    $menus = config('db.menus');
    return view('collectibles', compact('menus'));
}) ->name('collectibles');

Route::get('/videos', function () {
    $menus = config('db.menus');
    return view('videos', compact('menus'));
}) ->name('videos');

Route::get('/fans', function () {
    $menus = config('db.menus');
    return view('fans', compact('menus'));
}) ->name('fans');

Route::get('/news', function () {
    $menus = config('db.menus');
    return view('news', compact('menus'));
}) ->name('news');

Route::get('/shop', function () {
    $menus = config('db.menus');
    return view('shop', compact('menus'));
}) ->name('shop');