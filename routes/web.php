<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@home') -> name('home');

//axios call
route::get('/api/get/postcard', 'MainController@getPostcard') -> name('postcard.get');

//create a new card
Route::get('/create', 'MainController@create') -> name('create');
Route::post('/store', 'MainController@store') -> name('store');