<?php

Route::get('/', 'HomeController@getHome');

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/loguot', function () {
    return view('auth.logout');
});
Route::get('/catalog', 'CatalogController@getIndex');


Route::group(['prefix' => 'catalog'], function () {
    Route::get('/show/{id}', 'CatalogController@getShow');

    Route::get('/show/changeRented/{id}', 'CatalogController@changeRented');

    Route::get('/edit/{id}', 'CatalogController@getEdit');

    Route::get('/create', 'CatalogController@getCreate');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
