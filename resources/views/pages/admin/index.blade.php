@extends('layouts.master')

@section('Admin', 'DeltaV ')
@section('description')
  This page will let you track user and other things on the page
@endsection

@section('content')
	<h1>This is the admin page</h1>
	{{-- @can('edit_project') --}}
	<a href="{{ url('projects/create') }}">Create Project</a>
	<a href="#">Add skills</a>
	{{-- @endcan --}}
	{{-- @can('manage_user') --}}
	<a href="#">Create user</a>
	<a href="#">Create role</a>
	{{-- @endcan --}}
@endsection