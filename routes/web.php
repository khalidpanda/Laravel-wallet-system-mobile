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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('products','ProductController');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products.index', 'ProductController@index')->name('products.index');
Route::post('/products.store', 'ProductController@store')->name('products.store');
Route::get('/products.create', 'ProductController@create')->name('products.create');
Route::get('/products.show/{product}', 'ProductController@show')->name('products.show');
Route::put('/products/{product}', 'ProductController@update')->name('products.update');
Route::delete('/products.destroy/{product}', 'ProductController@destroy')->name('products.destroy');
Route::get('/products.edit/{product}', 'ProductController@edit')->name('products.edit');



Route::get('/user_access', 'UserAccessController@index')->name('user_access');
