@extends('layouts.master')

@section('title', 'DeltaV | Frontend Devlopment')
@section('description')
  {{-- Add Description --}}
@endsection

@section('content')
	<div class="container">
		<h1 class="text-center">Hey This is the projects page</h1>
	</div>
	<div class="row align-center">
	  @foreach ($projects as $project)
	  	<div class="col-md-4" style="padding-right:80px;">
		  	<h2 class="text-center">{{ $project->project_title }}</h2>
		  	<img src="{{ $project->project_image  }}">	
		  	<p class="text-left">{{ $project->project_description  }}</p>
	  	</div>
	  @endforeach
	</div>
@endsection