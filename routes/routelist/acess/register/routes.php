<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', 'Acess\RegisterController@index')->name('register');
Route::post('/register', 'Acess\RegisterController@create')->name('createUser');