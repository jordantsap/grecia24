<?php

Route::get('/', function () {
    return view('home');
});
Route::view('/contact', 'contact');
Route::post('/contact', 'ContactController@postContact')->name('postContact');
Route::get('destinations', 'DestinationController@index')->name('destinations.index');
Route::get('destinations/{destination}', 'DestinationController@show')->name('destinations.show');
Route::view('/company', 'company')->name('postContact');
Route::get('catalog', 'BusinessTypeController@index');
Route::get('catalog/{businesstype}', 'BusinessTypeController@show');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
