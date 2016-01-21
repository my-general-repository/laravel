<?php
//$lang = Config::get('app.languages', 'UTC');
Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', 'admin\AdminController@index');

Route::group(['middleware' => ['web']], function () {
    //
});
