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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@login');
Route::get('login', 'HomeController@login')->name('login');
Route::get('register', 'HomeController@register')->name('register');

Route::get('main', 'HomeController@index')->name('main')->middleware('auth');

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@store');
Route::get('logout', 'UserController@logout')->name('logout');

//main function
Route::get('incomes', 'UserController@getIncomes');//getIncome

