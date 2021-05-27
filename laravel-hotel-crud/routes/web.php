<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'MainController@home')
 ->name('home');

Route::get('/employee{id}', 'MainController@employee')
->name('employee');

Route::get('/create', 'MainController@create')
->name('create');

Route::post('/store', 'MainController@store')
->name('store');

Route::get('/delete{id}', 'MainController@delete')
->name('delete');

Route::get('/edit/{id}', 'MainController@edit')
->name('edit');

Route::post('/update/{id}', 'MainController@update')
->name('update');