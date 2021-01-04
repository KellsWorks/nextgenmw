<?php

namespace App\Http\Controllers;

use App\Models\ContactMessages;
use Illuminate\Http\Request;
use App\Models\Newsletters;



class MainController extends Controller
{
    public function index(){

        $homeInfo = HomeBanner::findOrFail(1);

        dd($homeInfo);

        return view('main.app');
    }

    public function contact(Request $request){

        $newMessage = new ContactMessage();

        $newMessage->name = $request->name;
        $newMessage->email = $request->email;
        $newMessage->subject = $request->subject;
        $newMessage->message = $request->message;

        $newMessage->save();

        return view('main.home');
    }


    public function newsletters(Request $request){

        $add = new Newsletters();

        $add->message = "Please add me to your newsletter";
        $add->email = $request->email;

        $add->save();

        return redirect('main.home');
    }
}
