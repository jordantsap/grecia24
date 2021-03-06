<?php

Route::get('/', 'HomeController@home');

// HOME SEARCH
Route::get('get-state-list/{state?}','AdvertSearchController@getStateList')->name('get-state-list');
Route::get('get-city-list/{city?}','AdvertSearchController@getCityList')->name('get-city-list');
Route::get('adsearch','AdvertSearchController@adsearch')->name('adsearch');


Auth::routes();
// Route::view('register', 'auth.login')->name('register'); //kalipsi apokrisi
Route::get('/account', 'HomeController@index')->name('account');

Route::get('/contact', 'ContactController@create')->name('ContactPage');
Route::post('/contact', 'ContactController@store')->name('postContact');

Route::get('destinations', 'DestinationController@index')->name('destinations.index');
Route::get('destinations/{destination}', 'DestinationController@show')->name('destinations.show');

Route::view('/company', 'company')->name('postContact');

Route::get('catalog', 'BusinessTypeController@index');
Route::get('catalog/{businesstype}', 'BusinessTypeController@show')->name('businesstype');
Route::get('business/{business}', 'BusinessController@show')->name('business.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::resource('adverts', 'AdvertisementController');//->middleware('auth');

Route::view('video', 'video');

Route::view('drivers', 'drivers');

Route::view('terms', 'terms');

Route::resource('posts', 'PostController');//->middleware('auth');

Route::view('real-estate', 'real-estate')->name('real-estate');
