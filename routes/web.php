<?php

Route::get('/', 'HomeController@home');

Auth::routes();
Route::get('/user', 'HomeController@index')->name('dashboard');

Route::view('/contact', 'contact');
Route::post('/contact', 'ContactController@postContact')->name('postContact');

Route::get('destinations', 'DestinationController@index')->name('destinations.index');
Route::get('destinations/{destination}', 'DestinationController@show')->name('destinations.show');

Route::view('/company', 'company')->name('postContact');

Route::get('catalog', 'BusinessTypeController@index');
Route::get('catalog/{businesstype}', 'BusinessTypeController@show');
Route::get('business/{business}', 'BusinessController@show')->name('business.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::resource('adverts', 'AdvertisementController');//->middleware('auth');

Route::view('video', 'video');

Route::view('terms', 'terms');

Route::resource('posts', 'PostController');//->middleware('auth');

Route::view('real-estate', 'real-estate')->name('real-estate');
