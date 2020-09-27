<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/', 'PagesController@index');
Route::get('/home', 'HomeController@index')->name('home');
// Client Detail
Route::get('/Clients/Clients', 'ClientController@index');
Route::get('/clients/Create', 'ClientController@create');
Route::post('/storeclients', 'ClientController@store');

// Admin
Route::get('/admin/dashboard', 'PagesController@dashboard');
// Savings routes
Route::get('/savings', 'SavingsController@index');
Route::get('/savings/create', 'SavingsController@create');
Route::post('/savings', 'SavingsController@store');
Route::get('/savings/edit/{id}', 'SavingsController@edit');
Route::patch('/savings/{id}', 'SavingsController@update');
Route::get('/savings/delete/{id}', 'SavingsController@destroy');

//Category create
Route::get('/category', 'CategoryController@index');
// Route::get('/category', 'CategoryController@create');
Route::post('/categorypost', 'CategoryController@store');
