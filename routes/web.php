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
    return view('/auth/login');
});

Auth::routes();

Route::resource('profile','ProfileController');
Route::resource('user_access','UserAccessController');
Route::resource('sales_report','SalesReportController');
// Route::resource('wallet','WalletController');



Route::get('/home', 'HomeController@index')->name('home');



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

//topup
Route::get('/wallet', 'WalletController@index');
Route::post('/wallet/topup', 'WalletController@topup');
Route::get('/wallet/topupresult/{amount}', 'WalletController@topupresult');
Route::get('/transhistory', 'WalletController@transhistory')->name('wallet.transhistory');

