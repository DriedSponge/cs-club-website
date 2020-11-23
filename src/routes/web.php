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

Route::get('/current-projects', function () {
    return view('pages.projects');
})->name("projects");

Route::get('/events', function () {
	return view('pages.events');
})->name("events");

Route::get('/contact-us', function () {
    return view("pages.contactus");
})->name("contactus");
Route::post('/contact-us/send', 'App\Http\Controllers\ContactController@send')->name('contact-post');