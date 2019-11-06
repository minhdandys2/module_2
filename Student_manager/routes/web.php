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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('student')->group(function () {
    Route::get('/index', 'StudentController@index')->name('student.index');
    Route::get('/create', 'StudentController@create')->name('student.create');
    Route::post('/create', 'StudentController@store')->name('student.store');
    Route::get('/delete/{id}', 'StudentController@delete')->name('student.delete');
    Route::get('/edit/{id}', 'StudentController@edit')->name('student.edit');
    Route::post('/edit/{id}', 'StudentController@update')->name('student.update');
    Route::get('/search','StudentController@search')->name('student.search');
});
