<?php

namespace valerie\Http\Controllers;

use Illuminate\Http\Request;

use valerie\Http\Requests;

use valerie\User;
use DB;

class AdminController extends Controller
{
    public function index()
    {
    	return view('pages.admin.index');
    }
    public function createNewUser()
    {
    	return view('pages.admin.index');
    }
}
