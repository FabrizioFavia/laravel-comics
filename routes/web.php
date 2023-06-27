<?php

use Illuminate\Support\Facades\Route;
@include("config.store");
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
    $data = ["DC POWER VISA", "ADDITIONAL DC SITES"];
    $comics = config('store.comics');
    $navItems = config('store.navItems');
    return view('welcome', compact('comics', 'data', 'navItems'));
    
});

Route::get('/otherpage', function () {
    $comics = config('store.comics');
    return view('other', compact('comics'));
});
