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

Route::get('/', function () {
    return view('main');
})->name('main');


Route::resource('currencies', 'CurrencyController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('guest');

// OAuth Routes
Route::prefix('auth/{provider}') -> group ( function () {
    Route::get('/', 'Auth\AuthController@redirectToProvider');
    Route::get('/callback', 'Auth\AuthController@handleProviderCallback');
});