@extends('layouts.master')

@section('title', 'DeltaV | Frontend Devlopment')
@section('description')
  {{-- Add Description --}}
@endsection

@section('content')
<h1 class="text-center">Frontend Development</h1>	

<div class="container">
	<div class="row ">
		@foreach ($projects as $project)
			<div class="">
				<h2>{{ $project->project_title }}</h2>
				<img src="{{ $project->project_image  }}">	
				<p>{{ $project->project_description  }}</p>
			</div>
		@endforeach
	</div>
</div>
  
@endsection