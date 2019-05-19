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

Route::get('/', 'GalleryController@index')->name('home');

Auth::routes();

Route::get('home', 'GalleryController@index')->name('home');

Route::get('register', 'GalleryController@index');
Route::post('register', 'GalleryController@index');

Route::middleware(['auth'])->group(function() {
    Route::get('addPhoto', 'GalleryController@addPhoto')->name('addPhoto');
    Route::post('submitPhoto', 'GalleryController@submitPhoto')->name('submitPhoto');
    Route::get('deletePhoto/{id}', 'GalleryController@deletePhoto')->name('deletePhoto');
    Route::get('editPhoto/{id}', 'GalleryController@editPhoto')->name('editPhoto');
    Route::post('editSubmitPhoto', 'GalleryController@editSubmitPhoto')->name('editSubmitPhoto');
});

