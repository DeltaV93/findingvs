<?php

namespace valerie\Http\Controllers;

use Illuminate\Http\Request;

use valerie\Http\Requests;
use valerie\PersonalSkills;
use valerie\ProfesionalSkills;

class ResumeController extends Controller
{
	public function index() {

	    $personals = PersonalSkills::all();
	    $profesionals = ProfesionalSkills::all();
        return view('resume', compact('personals','profesionals'));
	} 
}
