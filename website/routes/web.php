<?php

Auth::routes();

Route::get('/home', function() { return redirect()->route('home'); });
Route::get('/', 'HomeController@index')->name('home');

Route::get('/menu', 'MenuController@index')->name('menu');

Route::get('/aanbiedingen', 'AanbiedingenController@index')->name('aanbiedingen');
Route::get('/aanbieders', 'AanbiedersController@index')->name('aanbieders');

Route::get('/winkelmandje', 'ShoppingcartController@index')->name('cart');
Route::get('/winkelmandje/add/{id}', 'ShoppingcartController@store')->name('cart.add');
Route::get('/winkelmandje/delete/{id}', 'ShoppingcartController@delete')->name('cart.delete');

// Route::get('/account', 'AccountController@index')->name('account.index'); /* === Account === */
// Route::post('/account', 'AccountController@edit')->name('account.edit');

Route::prefix('admin')->group(function() {
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('', 'AdminController@index')->name('admin.index');
        Route::get('/', 'AdminController@index')->name('admin.index');

        Route::post('', 'AdminController@index')->name('admin.store');
    });

    Route::get('/login', 'Auth\AdminloginController@show')->name('admin.login');
    Route::post('/login', 'Auth\AdminloginController@login')->name('admin.login.submit');
});