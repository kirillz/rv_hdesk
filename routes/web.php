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
Route::get('/',  'HomeController@index')->name('home.index');

// Client CRUD
Route::get('/clients', 'ClientController@index')->name('client.index');
Route::get('/clients/create', 'ClientController@create')->name('client.create');
Route::post('/clients', 'ClientController@store')->name('client.store');
Route::get('/clients/{client}', 'ClientController@show')->name('client.show');
// for update we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
Route::get('/clients/{client}/edit', 'ClientController@edit')->name('client.edit');
Route::patch('/clients/{client}', 'ClientController@update')->name('client.update');
Route::delete('/clients/{client}', 'ClientController@destroy')->name('client.delete');

// Invoices CRUD
Route::get('/invoices', 'InvoiceController@index')->name('invoice.index');
Route::get('/invoices/create', 'InvoiceController@create')->name('invoice.create');
Route::post('/invoices', 'InvoiceController@store')->name('invoice.store');
Route::get('/invoices/{invoice}', 'InvoiceController@show')->name('invoice.show');
// for update we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
Route::get('/invoices/{invoice}/edit', 'InvoiceController@edit')->name('invoice.edit');
Route::patch('/invoices/{invoice}', 'InvoiceController@update')->name('invoice.update');
Route::delete('/invoices/{invoice}', 'InvoiceController@destroy')->name('invoice.delete');

// Tasks CRUD
Route::get('/tasks','TaskController@index')->name('task.index');
Route::get('/tasks/create', 'TaskController@create')->name('task.create');
Route::post('/tasks', 'TaskController@add')->name('task.add');
Route::get('/tasks/{task}', 'TaskController@show')->name('task.show');
// for update we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
Route::get('/tasks/{task}/edit', 'TaskController@edit')->name('task.edit');
Route::patch('/tasks/{task}', 'TaskController@update')->name('task.update');
Route::delete('/tasks/{task}', 'TaskController@destroy')->name('task.delete');

