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
Route::get('/', 'HomeController@index')->name('home.index');

// Client CRUD
Route::group(['namespace' => 'Client'], function () {
    Route::get('/clients', 'IndexController')->name('client.index');
    Route::get('/clients/create', 'CreateController')->name('client.create');
    Route::post('/clients', 'StoreController')->name('client.store');
    Route::get('/clients/{client}', 'ShowController')->name('client.show');
    // for update, we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
    Route::get('/clients/{client}/edit', 'EditController')->name('client.edit');
    Route::patch('/clients/{client}', 'UpdateController')->name('client.update');
    Route::delete('/clients/{client}', 'DestroyController')->name('client.delete');
});


// Invoices CRUD
Route::group(['namespace' => 'Invoice'], function () {
    Route::get('/invoices', 'IndexController')->name('invoice.index');
    Route::get('/invoices/create', 'CreateController')->name('invoice.create');
    Route::post('/invoices', 'StoreController')->name('invoice.store');
    Route::get('/invoices/{invoice}', 'ShowController')->name('invoice.show');
    // for update, we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
    Route::get('/invoices/{invoice}/edit', 'EditController')->name('invoice.edit');
    Route::patch('/invoices/{invoice}', 'UpdateController')->name('invoice.update');
    Route::delete('/invoices/{invoice}', 'DestroyController')->name('invoice.delete');
    //Get invoices only for a selected client
    Route::get('/invoices/clients/{client?}','ShowWithClientsController')->name('invoice.show_with_clients');


});

// Tasks CRUD
Route::group(['namespace' => 'Task'], function () {
    Route::get('/tasks', 'IndexController')->name('task.index');
    Route::get('/tasks/create', 'CreateController')->name('task.create');
    Route::post('/tasks', 'StoreController')->name('task.store');
    Route::get('/tasks/{task}', 'ShowController')->name('task.show');
    // for update, we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
    Route::get('/tasks/{task}/edit', 'EditController')->name('task.edit');
    Route::patch('/tasks/{task}', 'UpdateController')->name('task.update');
    Route::delete('/tasks/{task}', 'DestroyController')->name('task.delete');
});

// Payments CRUD
Route::group(['namespace' => 'Payment'], function () {
    Route::get('/payments', 'IndexController')->name('payment.index');
    Route::get('/payments/create', 'CreateController')->name('payment.create');
    Route::post('/payments', 'StoreController')->name('payment.store');
    Route::get('/payments/{payment}', 'ShowController')->name('payment.show');
    // for update, we need two route look at convention (https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller)
    Route::get('/payments/{payment}/edit', 'EditController')->name('payment.edit');
    Route::patch('/payments/{payment}', 'UpdateController')->name('payment.update');
    Route::delete('/payments/{payment}', 'DestroyController')->name('payment.delete');
    //Get payment only for selected client
    Route::get('/payments/clients/{client?}','ShowWithClientsController')->name('payment.show_with_clients');
});

//// Include static app constants /app/Constants.php
require_once app_path('/Constants.php');
