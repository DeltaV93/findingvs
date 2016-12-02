<?php

namespace valerie\Http\Controllers;

use Illuminate\Http\Request;

use valerie\Http\Requests;
use DB;
use Auth;
use valerie\PersonalSkills;

class PersonalControllers extends Controller
{
	public function resume() {

	    $personal = PersonalSkills::all()

	    return view('resume', compact('personal'));
	} 
}
