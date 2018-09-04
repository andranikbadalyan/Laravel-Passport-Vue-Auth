<?php

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

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth:api');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');



/*
|--------------------------------------------------------------------------
| Laravel Passport Routes
|--------------------------------------------------------------------------
|
| If you'd like to use full functionality of laravel passport
| use the routes below instead of registering your routes in
| AuthServiceProvider as instructed in passport documentation.
| This will use "auth:api" guard instead of "auth"
|
*/
Route::get('oauth/authorize', '\Laravel\Passport\Http\Controllers\AuthorizationController@authorize')->middleware('auth:api');
Route::delete('oauth/authorize', '\Laravel\Passport\Http\Controllers\DenyAuthorizationController@deny')->middleware('auth:api');
Route::post('oauth/authorize', '\Laravel\Passport\Http\Controllers\ApproveAuthorizationController@approve')->middleware('auth:api');

Route::get('oauth/clients', '\Laravel\Passport\Http\Controllers\ClientController@forUser')->middleware('auth:api');
Route::post('oauth/clients', '\Laravel\Passport\Http\Controllers\ClientController@store')->middleware('auth:api');
Route::put('oauth/clients/{client_id}', '\Laravel\Passport\Http\Controllers\ClientController@update')->middleware('auth:api');
Route::delete('oauth/clients/{client_id}', '\Laravel\Passport\Http\Controllers\ClientController@destroy')->middleware('auth:api');

Route::post('oauth/personal-access-tokens', '\Laravel\Passport\Http\Controllers\PersonalAccessTokenController@store')->middleware('auth:api');
Route::get('oauth/personal-access-tokens', '\Laravel\Passport\Http\Controllers\PersonalAccessTokenController@forUser')->middleware('auth:api');
Route::delete('oauth/personal-access-tokens/{token_id}', '\Laravel\Passport\Http\Controllers\PersonalAccessTokenController@destroy')->middleware('auth:api');

Route::get('oauth/scopes', '\Laravel\Passport\Http\Controllers\ScopeController@all')->middleware('auth:api');
Route::post('oauth/token/refresh', '\Laravel\Passport\Http\Controllers\TransientTokenController@refresh')->middleware('auth:api');
Route::get('oauth/tokens', '\Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@forUser')->middleware('auth:api');
Route::delete('oauth/tokens/{token_id}', '\Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@destroy')->middleware('auth:api');




/*
|--------------------------------------------------------------------------
| Vue Router
|--------------------------------------------------------------------------
|
| Allows vue router to pick up all other URL's.
|
*/
Route::any('{all}', function(){
    return view('app');
})->where(['all' => '.*']);