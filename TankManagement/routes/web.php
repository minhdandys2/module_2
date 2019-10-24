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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('customer')->group(function (){
    Route::get('index','CustomerController@index')->name('customer.listCustomer');
    Route::get('create','CustomerController@create')->name('customer.create');
    Route::post('create', 'CustomerController@store')->name('customer.store');
    Route::get('delete/{id}','CustomerController@delete')->name('customer.delete');
    Route::get('edit/{id}','CustomerController@edit')->name('customer.edit');
    Route::post('edit/{id}','CustomerController@update')->name('customer.update');
});
