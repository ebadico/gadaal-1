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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::middleware(['auth', 'activity'])->group(function ($router) {
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('surveys', 'SurveyController');
Route::resource('roles','RoleController');
Route::get('surveys', 'SurveyController@index')->name('surveys');
Route::get('towns', 'TownController@index')->name('towns');
Route::get('auth/', 'Controller@index')->name('authindex');
Route::get('auth/show/{user}', 'Controller@show')->name('authshow');
});
//Route::get('/home', 'SurveyController@indexindex')->name('home');

