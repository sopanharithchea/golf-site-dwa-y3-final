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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/features', function () {
    return view('pages.features');
})->name('features');
Route::get('/video')->name('video');
Route::get('/image')->name('image');
Route::get('/reservation', function () {
    return view('pages.reservation');
})->name('reservation');
Route::get('/career', function () {
    return view('pages.career');
})->name('career');
Route::get('/news', function () {
    return view('pages.news');
})->name('news');
Route::get('/article', function () {
    return view('pages.article');
})->name('article');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/features', function () {
    return view('pages.features');
})->name('features');
Route::get('/slide', function () {
    return view('pages.slideTable');
})->name('slideTable');

Route::get('service', 'ServiceFrontController@service')->name('service');
Route::get('about_us', 'AboutFrontController@about')->name('about_us');
Route::get('career_opportunity', 'CareerFrontController@career')->name('career_opportunity');

//Services
Route::get('services/index', 'ServicesController@index');
Route::get('services/create', 'ServicesController@create');
Route::get('services/delete', 'ServicesController@delete');
Route::get('services/edit/{id}', 'ServicesController@edit');
Route::post('services/save', 'ServicesController@save');
Route::post('services/update', 'ServicesController@update');

//Services_category
Route::get('services_category/index', 'ServicesCategoryController@index');
Route::get('services_category/create', 'ServicesCategoryController@create');
Route::get('services_category/delete', 'ServicesCategoryController@delete');
Route::get('services_category/edit/{id}', 'ServicesCategoryController@edit');
Route::post('services_category/save', 'ServicesCategoryController@save');
Route::post('services_category/update', 'ServicesCategoryController@update');

//Services_contact
Route::get('services_contact/index', 'ServicesContactController@index');
Route::get('services_contact/create', 'ServicesContactController@create');
Route::get('services_contact/delete', 'ServicesContactController@delete');
Route::get('services_contact/edit/{id}', 'ServicesContactController@edit');
Route::post('services_contact/save', 'ServicesContactController@save');
Route::post('services_contact/update', 'ServicesContactController@update');

Route::GET('/categoryctr', 'pageController@showcategorycontroller');
// cat
Route::GET('/catvideoctr', 'pageController@showcatvideocontroller');
Route::Delete('categoryctr/{id}', 'categoryBackendController@destroy')->name('categoryctr.destroy');
Route::Delete('catvideoctr/{id}', 'catvideoBackendController@destroy')->name('catvideoctr.destroy');
Route::Delete('categoryBackControl/{id}', 'imageController@destroy')->name('image.destroy');
Route::Delete('catvideoBackControl/{id}', 'videoController@destroy')->name('video.destroy');
Route::patch('categoryctr/{id}', 'categoryBackendController@update')->name('categoryctr.update');
Route::patch('catvideoctr/{id}', 'catvideoBackendController@update')->name('catvideoctr.update');
Route::resource('/slide', 'slideController');

Route::resource('/', 'HomeController');
// Route::resource('/home', 'HomeController');
Route::resource('/about', 'AboutController');
Route::resource('/career', 'CareerController');

Route::resource('/categorycontrol', 'categoryController');
Route::resource('/catvideocontrol', 'catvideoController');

Route::resource('/image', 'imageController');

Route::resource('/video', 'videoController');
Route::resource('/categoryBackControl', 'categoryBackendController');
Route::resource('/catvideoBackControl', 'catvideoBackendController');
