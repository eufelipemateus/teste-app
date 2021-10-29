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

Route::post('/cliente', 'App\Http\Controllers\ClienteController@create')->name("create_cliente");
Route::put('/cliente/{id}', 'App\Http\Controllers\ClienteController@update')->name("update_cliente");
Route::delete('/cliente/{id}', 'App\Http\Controllers\ClienteController@delete')->name("delete_cliente");
Route::get('/cliente/{id}', 'App\Http\Controllers\ClienteController@get')->name("get_cliente");
Route::get('/consulta/final-placa/{numero}', 'App\Http\Controllers\ClienteController@procurarPorNumeroPlaca')->name("get_placa");

