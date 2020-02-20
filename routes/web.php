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
Route::resource('sales_report','SalesReportController');
Route::resource('product_report','ProductReportController');


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

//sales report
Route::post('/sales_report/store', 'SalesReportController@store')->name('sales_report.store');
Route::get('/sales_report/create', 'SalesReportController@create')->name('sales_report.create');
Route::get('/sales_report/show/{id}', 'SalesReportController@show')->name('sales_report.show');
Route::post('sales_report/update','SalesReportController@update');
Route::delete('/sales_report/destroy/{id}', 'SalesReportController@destroy')->name('sales_report.destroy');
Route::get('/sales_report/edit/{id}', 'SalesReportController@edit')->name('sales_report.edit');


//product report
Route::post('/product_report/store', 'ProductReportController@store')->name('product_report.store');
Route::get('/product_report/create', 'ProductReportController@create')->name('product_report.create');
Route::get('/product_report/show/{id}', 'ProductReportController@show')->name('product_report.show');
Route::post('product_report/update','ProductReportController@update');
Route::delete('/product_report/destroy/{id}', 'ProductReportController@destroy')->name('product_report.destroy');
Route::get('/product_report/edit/{id}', 'ProductReportController@edit')->name('product_report.edit');
