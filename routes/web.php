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
Route::group(['namespace' => 'Client'], function() {
    Route::get('/clients', 'IndexController')->name('client.index');
    Route::get('/clients/create', 'CreateController')->name('client.create');
    Route::post('/clients', 'StoreController')->name('client.store');
    Route::get('/clients/{client}', 'ShowController')->name('client.show');
// for update we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
    Route::get('/clients/{client}/edit', 'EditController')->name('client.edit');
    Route::patch('/clients/{client}', 'UpdateController')->name('client.update');
    Route::delete('/clients/{client}', 'DestroyController')->name('client.delete');
});


// Invoices CRUD
Route::get('/invoices', 'InvoiceController@index')->name('invoice.index');
Route::get('/invoices/create', 'InvoiceController@create')->name('invoice.create');
Route::post('/invoices', 'InvoiceController@store')->name('invoice.store');
Route::get('/invoices/{invoice}', 'InvoiceController@show')->name('invoice.show');
// for update we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
Route::get('/invoices/{invoice}/edit', 'InvoiceController@edit')->name('invoice.edit');
Route::patch('/invoices/{invoice}', 'InvoiceController@update')->name('invoice.update');
Route::delete('/invoices/{invoice}', 'InvoiceController@destroy')->name('invoice.delete');