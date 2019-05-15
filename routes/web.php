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

Auth::routes(['register' => false]);

Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
// Route::resource('clients', 'ClientController');
Route::resource('priorities', 'PriorityController');
Route::resource('companysizes', 'CompanysizeController');
Route::resource('companytypes', 'CompanytypeController');
Route::resource('companydeals', 'CompanydealController');

Route::resource('sizes', 'SizeController');
Route::resource('shapes', 'ShapeController');
Route::resource('colors', 'ColorController');
Route::resource('clarities', 'ClarityController');
Route::resource('cuts', 'CutController');
Route::resource('certs', 'CertController');
Route::resource('products', 'ProductController');

Route::resource('companies', 'CompanyController');

Route::resource('buyers', 'BuyerController');
Route::resource('sellers', 'SellerController');
Route::get('link', 'PagesController@link')->name('link');
Route::get('inventory', 'PagesController@inventory')->name('inventory');
