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

//Backoffice
Route::middleware('auth')
    ->namespace('admin') //tutti i controller saranno all'interno del namespace admin
    ->name('admin.') //il nome della rotta
    ->prefix('admin') // il prefisso della rotta
    ->group(function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('posts', 'PostController');
        Route::resource('categories', 'CategoryController');
        Route::resource('tags', 'TagController');
    });

//Front office
Route::any("{any?}", function() {
    return view('guest.home');
})->where('any', '.*');

