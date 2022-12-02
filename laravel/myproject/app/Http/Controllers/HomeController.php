<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $UserData = Auth::user();
    //    dd($UserData->roll_id);
       if ($UserData->roll_id == 1) {
                return redirect('admin');
       }else {

           return view('home');
        }
    }


    public function sendmail(Request $request)
    {
        // dd($request->all());
            $data = array('name'=>"Bhavin");
            $mailto = $request->to;

            \Mail::send(['html'=>'mail'], $data, function($message) use($mailto) {
                // dd($mailto);
               $message->to($mailto, 'Welcome to my site')->subject
                  ('Congratulation');
               $message->from('bhavinahir6221@gmail.com','bhavin ahir');
            });
            echo "Basic Email Sent. Check your inbox.";
    }
}
