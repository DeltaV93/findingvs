@extends('layouts.master')

@section('title', 'DeltaV | Frontend Devlopment')
@section('description')
  {{-- Add Description --}}
@endsection

@section('content')
  <h1>Hey This is the projects page</h1>
  @foreach ($projects as $project)
  	<h2>{{ $project->project_title }}</h2>
  	<img src="{{ $project->project_image  }}">	
  	<p>{{ $project->project_description  }}</p>
  @endforeach
@endsection