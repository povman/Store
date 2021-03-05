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
    return view('index') ;
});

// Controller-name@method-name
Route::get('/', 'App\Http\Controllers\StoreController@index'); // localhost:8000/
Route::get('/{id}', 'App\Http\Controllers\StoreController@index');
Route::post('/save', 'App\Http\Controllers\StoreController@save');
Route::get('/deleteUser/{id}', 'App\Http\Controllers\StoreController@deleteUser');

