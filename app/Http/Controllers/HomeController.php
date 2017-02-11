<?php

namespace valerie\Http\Controllers;

use Mail;
use valerie\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Send an contact me email.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendContactMeEmail(Request $request, $id)
    {
        $senderName = 'input_name';
        $senderEmail ='input email';

        $senderMessage = 'input message';

        Mail::send('emails.contact', ['user' => $user], function ($m) use ($user) {
            $m->from('vale@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }    
}
