<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Api\ClientApiController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clients', ClientController::class);
Route::apiResource('api/clients', ClientApiController::class);

Route::get('/add', 'App\Http\Controllers\SessionController@addData')->name('session.add');
Route::get('/show', 'App\Http\Controllers\SessionController@showData')->name('session.show');
Route::get('/delete', 'App\Http\Controllers\SessionController@deleteData')->name('session.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');