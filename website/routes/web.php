<?php

Auth::routes();

Route::get('/home', function() { return redirect()->route('home'); }); /* === Redirect === */
Route::get('/', 'HomeController@index')->name('home.index'); /* === Home === */
// Route::get('/menu', 'MenuController@index')->name('menu.index'); /* === Menu === */
// Route::get('/aanbiedingen', 'AanbiedingenController@index')->name('aanbiedingen.index'); /* === Aanbiedingen === */
// Route::get('/aanbieders', 'AanbiedersController@index')->name('aanbieders.index'); /* === Aanbieders === */

// Route::get('/account', 'AccountController@index')->name('account.index'); /* === Account === */
// Route::post('/account', 'AccountController@edit')->name('account.edit');


Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminloginController@show')->name('admin.login');
    Route::post('/login', 'Auth\AdminloginController@login')->name('admin.login.submit');

    Route::get('/admin', 'AdminController@dashboard')->name('admin.dashboard');
});