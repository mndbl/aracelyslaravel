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

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/business-plan', 'pages.business-plan')->name('business-plan');
Route::view('/corporate-structure', 'pages.corporate-structure')->name('corporate-structure');
Route::view('/marketing-plan', 'pages.marketing-plan')->name('marketing-plan');
Route::view('/strategic-management', 'pages.strategic-management')->name('strategic-management');
Route::view('/future-development', 'pages.future-development')->name('future-development');
Route::view('/hotel-operations', 'pages.hotel-operations')->name('hotel-operations');
