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

// We name our routes so we can easily generate urls https://laravel.com/docs/8.x/helpers#method-route
Route::get('/', function () {
    return view('pages.home');
})->name("home");
