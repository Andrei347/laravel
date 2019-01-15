<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/loguot', function () {
    return view('auth.logout');
});
Route::get('/catalog', function () {
    return view('catalog.index');
});
Route::get('/show/{id}', function ($id) {
    return iew('catalog.show', array('id'=>$id));
});
Route::get('/create', function () {
    return view('catalog.create');
});
Route::get('/edit/{id}', function ($id) {
    return iew('catalog.edit', array('id'=>$id));
});
