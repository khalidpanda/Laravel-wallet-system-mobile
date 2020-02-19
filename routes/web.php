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
Route::resource('profile','ProfileController');
Route::resource('user_access','UserAccessController');


Route::get('/home', 'HomeController@index')->name('home');

//products
Route::post('/products/store', 'ProductController@store')->name('products.store');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/show/{product}', 'ProductController@show')->name('products.show');
Route::post('products/update','ProductController@update');
Route::delete('/products/destroy/{product}', 'ProductController@destroy')->name('products.destroy');
Route::get('/products/edit/{product}', 'ProductController@edit')->name('products.edit');

//profile
Route::post('profile/update','ProfileController@update');
Route::get('/profile/edit/{profile}', 'ProfileController@edit')->name('profile.edit');

//user access
Route::post('/user_access/store', 'UserAccessController@store')->name('user_access.store');
Route::get('/user_access/create', 'UserAccessController@create')->name('user_access.create');
Route::get('/user_access/show/{id}', 'UserAccessController@show')->name('user_access.show');
Route::post('user_access/update','UserAccessController@update');
Route::delete('/user_access/destroy/{id}', 'UserAccessController@destroy')->name('user_access.destroy');
Route::get('/user_access/edit/{id}', 'UserAccessController@edit')->name('user_access.edit');
Route::get('/user_access/right/{id}', 'UserAccessController@right')->name('user_access.right');
Route::post('user_access/rightfunc','UserAccessController@rightfunc');
