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

Route::redirect('/', 'dashboard');

Auth::routes();

Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::resource('clients', 'ClientController');
Route::resource('buyers', 'BuyerController');
Route::resource('sellers', 'SellerController');
