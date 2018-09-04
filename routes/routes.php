<?php

/*
|--------------------------------------------------------------------------
| Routes Without web/api Middleware
|--------------------------------------------------------------------------
|
| Here is where you can register routes without middleware for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken')->middleware('throttle');