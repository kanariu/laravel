<?php

use Illuminate\Support\Facades\Route;

Route::get('/product/{id}', 'Product\ProductController@view')->name('product-item');