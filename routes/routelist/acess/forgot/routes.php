<?php

use Illuminate\Support\Facades\Route;

Route::get('/forgot', 'Acess\ForgotController@index')->name('forgot');