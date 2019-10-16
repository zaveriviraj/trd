<?php

use App\Company;

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
Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::redirect('/', 'dashboard');

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

    Route::get('companies/favorites', 'FavoriteController@index')->name('companies.favorites');
    Route::get('companies/{company}/favorite', 'FavoriteController@create')->name('companies.favorite.create');
    Route::get('companies/{company}/unfavorite', 'FavoriteController@remove')->name('companies.favorite.remove');
    Route::post('companies/{company}/relationship', 'RelationshipController@create')->name('companies.relationship.create');
    Route::resource('companies', 'CompanyController');

    Route::resource('buyers', 'BuyerController');
    Route::resource('sellers', 'SellerController');
    Route::get('link', 'PagesController@link')->name('link');
    Route::get('inventory', 'PagesController@inventory')->name('inventory');

    Route::get('import', 'CompanyController@import')->name('import');
    Route::get('import2', 'CompanyController@import2')->name('import2');
    Route::get('import3', 'CompanyController@import3')->name('import3');
    Route::get('import4', 'CompanyController@import4')->name('import4');
    Route::get('import5', 'CompanyController@import5')->name('import5');

    Route::resource('searches', 'SearchController');
    Route::post('search', 'SearchController@search')->name('search');

    Route::resource('layouts', 'LayoutController');

    Route::view('sort', 'sort');
});