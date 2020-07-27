<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Landing\LandingController@index')->name('home');
Route::get('/skills/{skill?}', 'Landing\LandingController@skills')->name('skills');
Route::get('/search', 'Landing\LandingController@search')->name('search');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
