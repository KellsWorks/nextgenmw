<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index(){

        $homeInfo = HomeBanner::findOrFail(1);

        dd($homeInfo);

        return view('main.app');
    }
}
