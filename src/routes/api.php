<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/members', [\App\Http\Controllers\MembersController::class, 'api'])->name("members-api");
Route::get('/members/{member}', [\App\Http\Controllers\MembersController::class, 'apimember'])->name("member-api");
