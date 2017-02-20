<?php

namespace valerie\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use valerie\Http\Requests;
use valerie\Http\Requests\ContactFormRequest;;

class ContactController extends Controller
{
  public function contact(ContactFormRequest $request)
  {
    $data = $request->only('name', 'email', 'message');

    Mail::send('email.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($msg)
    {
        $msg->from('valeriensharp93@gmail.com')
            ->to('valeriensharp93@gmail.com', 'Valerie Sharp')
            ->subject('Someone Sent You A Message From FindingVs');
    });
  }

}
