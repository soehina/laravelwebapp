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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::group(
    ['prefix' => 'contacts', 'middleware' => 'auth'],
    function () {
        Route::get('index', 'ContactFormController@index')->name('contacts.index');
        Route::get('create', 'ContactFormController@create')->name('contacts.create');
        Route::post('store', 'ContactFormController@store')->name('contacts.store');
        Route::get('show/{id}', 'ContactFormController@show')->name('contacts.show');
        Route::get('edit/{id}', 'ContactFormController@edit')->name('contacts.edit');
        Route::post('update/{id}', 'ContactFormController@update')->name('contacts.update');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
