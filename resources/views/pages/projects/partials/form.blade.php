@extends('layouts.master')

@section('title', 'DeltaV | Frontend Devlopment')
@section('description')
  {{-- Add Description --}}
@endsection

@section('content')
<div class="container">
 
  <h1 class="col-lg-1">Add a project form </h1>
	{{ Form::open(['url' => '/projects']) }}
		{!! Form::label('project_title', 'Title', ['class' => 'col-lg-2']) !!}
		{!! Form::text('project_title', null, ['class' => 'col-lg-2', 'placeholder'=>'Project Title']) !!}

		{!! Form::file('project_image', ['class' => 'lg-3']) !!}

		{!! Form::label('project_description', 'Description', ['class' => 'col-lg-2']) !!}
		{!! Form::text('project_description', null, ['class' => 'col-lg-2', 'placeholder'=>'Project Description']) !!}
			
		<label><input type="checkbox" name="project_tools">Project Tools</label>
		{{-- <label><input type="radio" name="project_tools">Project Tools</label> --}}

		{!! Form::label('project_feedback', 'Project Feedback', ['class' => 'col-sm-2']) !!}
		{!! Form::text('project_feedback', null, ['class' => 'lg-3']) !!}

		{!! Form::label('project_gallery', 'Project Gallery', ['class' => 'col-lg-2']) !!}
		{!! Form::textarea('project_gallery', null, ['class' => 'lg-3']) !!}

		{!! Form::submit('Button', ['class' => 'col-sm-12 ']) !!}
	{{ Form::close() }}	  
</div>
@endsection