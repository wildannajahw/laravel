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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/customsize', function () {
    return view('customsize');
});
Route::get('/details', function () {
    return view('details');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/verification', function () {
    return view('verification');
});