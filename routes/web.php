<?php

use Illuminate\Support\Facades\Route;
use App\Models\HomeBanner;
use App\Models\Newsletters;
use Illuminate\Http\Request;
use App\Models\PageVisitors;
use App\Models\User;
use App\Models\HomeContent;
use App\Models\Services;
use App\Models\LatestWorks;
use App\Models\SocialLinks;
use App\Models\Offers;

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


Route::get('/', function(Request $request) {
    
    $homeInfo = HomeBanner::all();

    $ip =  $request->ip();
    $visitor = new PageVisitors();
    $visitor->ip = $ip;

    $visitor->save();

    $services = Services::all();
    $socials = SocialLinks::all();

    $mobile_works = LatestWorks::select('SELECT * WHERE tag = mobile');
    $offers = Offers::all();
    

    return view('main.home', compact('mobile_works', 'homeInfo', 'offers'), compact('socials', 'services'));
});

Route::get('/offers/{id}', function($id) {
    
    $socials = SocialLinks::all();

    $offer = Offers::find($id);

    //dd($offer);

    return view('main.work', compact('socials', 'offer'));
});

Route::get('/downloads', function() {
    $socials = SocialLinks::all();

    return view('main.downloads', compact('socials'));
});

Route::get('/projects', function() {
    $socials = SocialLinks::all();

    return view('main.projects', compact('socials'));
});


Route::post('/send-message', ['App\Http\Controllers\MainController@contact'])->name('send-message');

Route::post('/subscribe-newsletter', function(Request $request) {
    $add = new Newsletters();

        $add->message = "Please add me to your newsletter";
        $add->email = $request->email;

        $add->save();

        return redirect('/')->with('status', 'success');
});




//Adminstrator routes


Route::get('/v1/admin', function() {

    $visitors = PageVisitors::all()->count();

    return view('admin.dashboard', compact('visitors'));
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

Route::get('/v1/admin/cpanel', function() {
    return view('admin.cpanel');
});

Route::get('/v1/admin/profile', function() {
    $users = User::all();

    return view('admin.profile', compact('users'));
});

Route::get('/v1/admin/pages', function() {

   

    return view('admin.pages');
});

Route::get('/v1/admin/services-offered', function() {

    $services = Services::select('select * where tab = tab_1')
    ;

    return view('admin.services', compact($services, 'services'));
});

Route::get('/v1/admin/home-page', function() {

    $contents = HomeContent::all();

    return view('admin.home', compact('contents'));
});

Route::get('/v1/admin/visitors', function() {

    $visitors = PageVisitors::all();

    return view('admin.page-visitors', compact('visitors'));
});


