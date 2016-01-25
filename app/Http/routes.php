<?php
//$lang = Config::get('app.languages', 'UTC');
Route::group(['middleware' => ['web']], function () {
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@getLogout');
    
    Route::group(['middleware' => 'auth.adminOnly'], function () {
        Route::get('admin', 'admin\AdminController@index');
        Route::resource('products', 'admin\ProductsController');
        Route::resource('brands', 'admin\BrandsController');
        Route::resource('types', 'admin\TypesController');
        Route::resource('countries', 'admin\CountriesController');
        Route::resource('regions', 'admin\RegionsController');
    });
});