@extends('layouts.master')

@section('show', 'DeltaV Industry')

@section('description')

@section('content')
	<h1>Show Page</h1>
	<h2>{{ $project->project_title }}</h2>
	<a href="{{   url('projects/' . $project->id . '/edit')   }}">Edit Project</a>

@endsection
