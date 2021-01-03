<?php

use Illuminate\Support\Facades\Route;
use App\Models\HomeBanner;

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


Route::get('/', function() {
    
    $homeInfo = HomeBanner::all();

    return view('main.app', compact($homeInfo, 'homeInfo'));
});



//Adminstrator routes


Route::get('/v1/admin', function() {
    return view('admin.dashboard');
});

Route::get('/v1/admin/login', function() {
    return view('auth.login');
});

Route::get('/v1/admin/register', function() {
    return view('auth.register');
})->name('admin/register');


Auth::routes();


Route::get('/v1/admin/latest-works', function() {
    return view('admin.works');
});



