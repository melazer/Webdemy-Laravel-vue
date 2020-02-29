<?php



Route::get('/', function () {
    $featuredSeries = App\Series::take(3)->latest()->get();
    return view("front", compact('featuredSeries'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
