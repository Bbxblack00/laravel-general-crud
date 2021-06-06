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
// 

Route::get('/', 'MatchController@home')
    -> name('home');


Route::get('/match/{id}', 'MatchController@single')
    -> name('single');


Route::get('/create/worker/', 'MatchController@create')
    -> name('create');


Route::get('/edit/{id}', 'MatchController@edit')
    -> name('edit');


Route::post('update/worker/{id}', 'MatchController@update')
    -> name('update');


Route::post('/store/worker/', 'MatchController@store')
    -> name('store');


Route::get('/destroy/{id}', 'MatchController@destroy')
    -> name('destroy');