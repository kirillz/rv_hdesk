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

// Public pages
// Route::get('/',  'HomeController@index')->name('home.index');



// Client CRUD
Route::get('/clients', 'ClientController@index')->name('client.index');
Route::get('/clients/create', 'ClientController@create')->name('client.create');
Route::post('/clients', 'ClientController@store')->name('client.store');
Route::get('/clients/{client}', 'ClientController@show')->name('client.show');

// for update we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
Route::get('/clients/{client}/edit', 'ClientController@edit')->name('client.edit');
Route::patch('/clients/{client}', 'ClientController@update')->name('client.update');
Route::delete('/clients/{client}', 'ClientController@destroy')->name('client.delete');

