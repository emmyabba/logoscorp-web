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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/blog', 'WelcomeController@blog')->name('blog');
Route::get('/software-development', 'WelcomeController@index')->name('welcome');
Route::get('/contact-us', 'WelcomeController@contactus')->name('contactus');
Route::post('/contact-us', 'WelcomeController@sendcontactmail')->name('sendcontactmail');
Route::get('/about-us', 'WelcomeController@aboutus')->name('aboutus');
