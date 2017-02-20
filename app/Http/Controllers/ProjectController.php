<?php

namespace valerie\Http\Controllers;

use Illuminate\Http\Request;

use valerie\Http\Requests;
use valerie\Http\Requests\ProjectRequest;
use DB;
use Auth;
use valerie\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        // MAKES THE RELATIONSHIP BETWEEN USER AND ENTRY
        // NOT NEEDED IN THE PROJECT
        // ADMIN SHOULD SEE IT ALL
            // $projects = Auth::user()->project()
            // ->orderBy('created_at', 'desc')
            // ->get();

        return view('pages.projects.index',);
    }

    /**
     * Display the Moodbook work.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function moodbook()
    {
        return view('moodbook');
    }
    /**
     * Display the frontend work.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function frontend()
    {
        $projects = Project::all();

        // MAKES THE RELATIONSHIP BETWEEN USER AND ENTRY
        // NOT NEEDED IN THE PROJECT
        // ADMIN SHOULD SEE IT ALL
            // $projects = Auth::user()->project()
            // ->orderBy('created_at', 'desc')
            // ->get();

        return view('frontend', compact('projects', 'urlChecker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Need to make it so only the admin can do that
        return view('pages.projects.partials.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        // THIS DOES NOT NEED TO BE HERE
        // SHOULD REDIRECT TO PROJECT INDEX
        // AND PULL ALL PROJECTS THERE
        $projects = Project::all();

        Project::create([
                    'user_id' => Auth::user()->id,
                    'project_title' => $request->input('project_title'),
                    'project_image' => $request->input('project_image'),
                    'project_description'=> $request->input('project_description'),
                    'project_tools'=> $request->input('project_tools'),
                    'project_feedback'=>$request->input('project_feedback'),
                    'project_gallery'=>$request->input('project_gallery')]);

        return view('pages.projects.index', compact('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('pages.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('pages.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $project->update($request->all());

        return redirect('pages.projects.show', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Project::findOrFail($id);

        $projects->delete();
    }
}
