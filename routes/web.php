<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/', 'nexoria.index')->name('nexoria.index');
Route::view('/swservices', 'nexoria.swservices')->name('nexoria.swservices');
Route::view('/contact', 'nexoria.contact')->name('nexoria.contact');
Route::view('/design', 'nexoria.design')->name('nexoria.design');

Route::view('/test', 'test')->name('test');


