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
});

Route::prefix('/currencies') -> group( function () {
    Route::get('/add', 'CurrencyController@add')->name('currencies.add'); 
    Route::get('/{id}/delete', 'CurrencyController@delete')->name('currencies.delete'); 
});

Route::resource('currencies', 'CurrencyController')->except(['create,destroy']); 