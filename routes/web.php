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

Route::get('/', function () {
    return view('welcome');
});

Route::get('td_show', 'App\Http\Controllers\TdController@show');
Route::get('td_delete/{id}', 'App\Http\Controllers\TdController@destroy');
Route::get('td_create', 'App\Http\Controllers\TdController@create');
Route::post('td_submit', 'App\Http\Controllers\TdController@store');
Route::get('td_edit/{id}', 'App\Http\Controllers\TdController@edit');
Route::post('td_update/{id}', 'App\Http\Controllers\TdController@update');







