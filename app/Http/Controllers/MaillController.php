<?php

namespace valerie\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use valerie\Http\Requests;

class MaillController extends Controller
{
  {
      use Queueable, SerializesModels;

      /**
       * Create a new message instance.
       *
       * @return void
       */
      public function __construct()
      {
          //
      }

      /**
       * Build the message.
       *
       * @return $this
       */
      public function build()
      {
          return $this->view('email.contact');
      }

}
