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


Route::get('/home', 'HomeController@index')->name('home');

//profile
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/account', 'ProfileController@account')->name('profile.account');
Route::post('profile/update','ProfileController@update');
Route::get('/profile/edit/{profile}', 'ProfileController@edit')->name('profile.edit');

//user access
Route::get('/user_access', 'UserAccessController@index');
Route::post('/user_access/store', 'UserAccessController@store')->name('user_access.store');
Route::get('/user_access/create', 'UserAccessController@create')->name('user_access.create');
Route::get('/user_access/show/{id}', 'UserAccessController@show')->name('user_access.show');
Route::post('user_access/update','UserAccessController@update');
Route::delete('/user_access/destroy/{id}', 'UserAccessController@destroy')->name('user_access.destroy');
Route::get('/user_access/edit/{id}', 'UserAccessController@edit')->name('user_access.edit');
Route::get('/user_access/right/{id}', 'UserAccessController@right')->name('user_access.right');
Route::post('user_access/rightfunc','UserAccessController@rightfunc');

//topup
Route::get('/wallet', 'WalletController@index');
Route::post('/wallet/topup', 'WalletController@topup');
Route::get('/wallet/topupresult/{amount}', 'WalletController@topupresult');
Route::get('/transhistory', 'WalletController@transhistory')->name('wallet.transhistory');

//rewards
Route::get('/rewards', 'RewardsController@index')->name('rewards.index');
Route::post('/rewards/store', 'RewardsController@store')->name('rewards.store');
Route::get('/rewards/create', 'RewardsController@create')->name('rewards.create');
Route::get('/rewards/show/{id}', 'RewardsController@show')->name('rewards.show');
Route::post('rewards/update','RewardsController@update');
Route::delete('/rewards/destroy/{id}', 'RewardsController@destroy')->name('rewards.destroy');
Route::get('/rewards/edit/{id}', 'RewardsController@edit')->name('rewards.edit');

//cars
Route::get('/cars', 'CarsController@index')->name('cars.index');
Route::get('/cars/carstype', 'CarsController@carstype')->name('cars.carstype');
Route::get('/cars/carsrent', 'CarsController@carsrent')->name('cars.carsrent');
Route::get('/cars/carsbuy', 'CarsController@carsbuy')->name('cars.carsbuy');
Route::post('/cars/store', 'CarsController@store')->name('cars.store');
Route::get('/cars/create', 'CarsController@create')->name('cars.create');
Route::get('/cars/show/{id}', 'CarsController@show')->name('cars.show');
Route::post('cars/update','CarsController@update');
Route::delete('/cars/destroy/{id}', 'CarsController@destroy')->name('cars.destroy');
Route::get('/cars/edit/{id}', 'CarsController@edit')->name('cars.edit');

//history
Route::get('/history', 'HistoryController@index');

//notification
Route::get('/notification', 'NotificationController@index');


//topup
Route::get('/topup', 'TopupController@index');

//payment
Route::get('/payment', 'TopupController@ipayment');

//i-book
Route::get('/book', 'BookController@index');

//icar 1st step

Route::get('/icar', 'CarsController@icar');

//irental
Route::get('/irental', 'CarsController@irental');

//irentnow
Route::get('/irentnow', 'CarsController@irentalNow');

//menu history section
Route::get('/history', 'HistoryController@Mhistory');

//icar book 2nd step
Route::get('/icarbook/{id}', 'CarsController@icarbook');

//icar book history
Route::get('/icarhistory', 'CarsController@icarhistory');

//irent favourite
Route::get('/irentfavourite', 'CarsController@irentfavourite');

//message
Route::get('/message', 'NotificationController@message');