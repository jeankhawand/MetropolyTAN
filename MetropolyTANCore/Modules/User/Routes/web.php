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

Route::prefix('user')->name('user.')->middleware('auth')->group(function() {
    Route::get('/', 'UserController@index')->middleware("can:users.read")->name('index');
    Route::post('/', 'UserController@index')->middleware("can:users.create")->name('create');
    Route::put('/', 'UserController@index')->middleware("can:users.update")->name('update');
    Route::delete('/', 'UserController@index')->middleware("can:users.delete")->name('delete');
});
