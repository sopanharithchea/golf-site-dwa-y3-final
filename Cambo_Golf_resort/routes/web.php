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
Route::get('/about', function(){return view('pages.about');})->name('about');
Route::get('/features', function(){return view('pages.features');})->name('features');
Route::get('/video')->name('video');
Route::get('/image')->name('image');
Route::get('/contact')->name('contact');
Route::get('/service', function(){return view('pages.service');})->name('service');
Route::get('/reservation', function(){return view('pages.reservation');})->name('reservation');
Route::get('/career', function(){return view('pages.career');})->name('career');
Route::get('/news', function(){return view('pages.news');})->name('news');
Route::get('/article', function(){return view('pages.article');})->name('article');
Route::get('/service', function(){return view('pages.service');})->name('service');
Route::get('/contact', function(){return view('pages.contact');})->name('contact');
Route::get('/features', function(){return view('pages.features');})->name('features');
Route::get('/slide', function(){return view('pages.slideTable');})->name('slideTable');
