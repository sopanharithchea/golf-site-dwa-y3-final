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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about')->name('about');
Route::get('/video')->name('video');
Route::get('/reservation', function(){return view('pages.reservation');})->name('reservation');
Route::get('/image')->name('image');
Route::get('/contact')->name('contact');
Route::get('/service', function(){return view('pages.service');})->name('service');