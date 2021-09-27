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
Route::get('/store','ShopController@getform')->name('Shop.form');
Route::post('/store/submit','ShopController@submitform')->name('Shop.form.submit');
Route::get('/table','ShopController@gettable')->name('table');
Route::get('/store/delete/{id}','ShopController@deleteform')->name('Shop.form.delete');
Route::get('/store/edit/{id}','ShopController@editform')->name('Shop.form.edit');
Route::post('/store/update/{id}','ShopController@updateform')->name('Shop.form.update');