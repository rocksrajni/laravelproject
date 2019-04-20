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
    return view('auth.login');
});
Route::resource('admin','AdminController')->middleware('auth');
Route::resource('order','OrderController');
Route::resource('allorders','AllorderController')->middleware('auth');
Auth::routes();

Route::get('/tickets', function () {
    return view('tickets');
});