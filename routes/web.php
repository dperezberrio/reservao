<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Auth::routes();
Route::get('home', 'HomeController@index')->name('home');
Route::get('adminHome', 'AdminHomeController@index')->name('adminHome');


Auth::routes();
Route::get('hotel', 'HotelController@hotel')->name('hotel');
Route::get('hotel/{id}/mostrar', 'HotelController@show');



Auth::routes();
Route::get('motel', 'MotelController@motel')->name('motel');
Route::get('motel/{id}/mostrar', 'MotelController@show');



Auth::routes();
Route::get('restaurante', 'RestauranteController@restaurante')->name('restaurante');
Route::get('restaurante/{id}/mostrar', 'RestauranteController@show');





Auth::routes();
Route::get('adminHotel', 'AdminHotelController@adminHotel')->name('adminHotel');

Auth::routes();
Route::get('motelAdmin', 'MotelAdminController@MotelAdmin')->name('hotelAdmin');

Auth::routes();
Route::get('restauranteAdmin', 'RestauranteAdminController@restauranteAdmin')->name('restauranteAdmin');