<?php



Route::get('/', function () {
    return view("front");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
