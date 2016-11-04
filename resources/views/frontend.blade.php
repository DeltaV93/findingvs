@extends('layouts.master')

@section('title', 'DeltaV | Frontend Devlopment')
@section('description')
  {{-- Add Description --}}
@endsection

@section('content')
<h1 class="text-center text-white">Frontend Projects</h1>

<div class="container">
	<div class="row">
		@foreach ($projects as $project)
			<div class="large-6 column frontend">
				<h2 class="fronted--title">{{ $project->project_title }}</h2>
				<a class="fronted--link" href="" target="_blank"><img src="{{ $project->project_image  }}"></a>
				<p class="frontend--description">{{ $project->project_description  }}</p>
				<h3>Tools Used</h3>
				<ul class="inline-list">
					<li>One <i class="fa fa-html5" aria-hidden="true"></i></li>
					<li>Two <i class="fa fa-html5" aria-hidden="true"></i></li>
					<li>Three <i class="fa fa-html5" aria-hidden="true"></i></li>
				</ul>
			</div>
		@endforeach
	</div>
</div>

@endsection
