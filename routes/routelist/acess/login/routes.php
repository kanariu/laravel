<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'Acess\LoginController@index')->name('login');
Route::get('/auth', 'Acess\LoginController@login')->name('auth');
Route::get('/logout', 'Acess\LoginController@logout')->name('logout');
Route::get('/orders', 'Acess\LoginController@orders')->name('orders');
Route::get('/profile', 'Acess\LoginController@profile')->name('profile');
