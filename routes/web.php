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

//User routes

Route::get('/', function () {
    return view('home');
});


Route::get('/v1/admin/login', function() {
    return view('auth.login');
});


Auth::routes();


//Adminstrator routes


Route::get('/v1/admin', function($id) {
    return view('admin.app');
});

