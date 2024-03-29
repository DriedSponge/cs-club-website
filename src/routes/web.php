<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
Route::get('/','App\Http\Controllers\HomeController@index')->name("home");

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

// When the end-user visits /members, execute the index function on the members contoller.
Route::get('/members', [\App\Http\Controllers\MembersController::class, 'index'])->name("members");

Route::get('/privacy-policy', function () {
    return view("pages.privacy");
})->name("privacy");

Route::get('/github/invite', function () {
    return Socialite::driver('github')->setScopes(['repo:invite'])->redirect();
})->name("github.invite");

Route::get('/auth/github/invite', "App\Http\Controllers\Auth\GithubAuthController@invite")->name("invte-confirm");