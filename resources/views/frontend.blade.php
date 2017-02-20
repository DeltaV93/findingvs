@extends('layouts.master')

@section('title', 'DeltaV | Frontend Devlopment')
@section('description')
  {{-- Add Description --}}
@endsection

@section('content')
<h1 class="text-center text-white">Projects</h1>

<div class="container">
	<div class="row">
			<div class="large-6 column frontend  panel">
				<h2 class="fronted--title ">Estify</h2>
				<a class="fronted--link" href="" target="_blank"><img src="{{ asset('img/estify_logo.svg') }}"></a>
				<p class="frontend--description"></p>
				<h3 class="">Tools Used</h3>
				<ul class="inline-list">
					<li class="small-1 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/asana.svg') }}" alt="Asana Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/invision.svg') }}" alt="Invisionapp Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/html.svg') }}" alt="HTML Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/gulp.svg') }}" alt="Sass Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon"></li>
				</ul>
			</div>
			<div class="large-6 column frontend  panel">
				<h2 class="fronted--title ">Meta+ Lab</h2>
				<a class="fronted--link" href="{{ url('/project/metalab') }}"><img alt="Meta+ Lab Logo" src="{{asset('/img/metaLab_logo_2.svg')}}"></a>
				<p class="frontend--description"></p>
				<h3 class="">Tools Used</h3>
				<ul class="inline-list">
					<li class="small-1 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/html.svg') }}" alt="HTML Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/learvel.svg') }}" alt="Laravel Icon"></li>
				</ul>
			</div>
			<div class="large-6 column frontend  panel">
				<h2 class="fronted--title ">MoodBook</h2>
				<a class="fronted--link" href="{{ url('/project/moodbook') }}" target="_blank"><img src="{{asset('/img/moodbook_logo.svg')}}"></a>
				<p class="frontend--description"></p>
				<h3 class="">Tools Used</h3>
				<ul class="inline-list">
					<li class="small-1 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/asana.svg') }}" alt="Asana Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/invision.svg') }}" alt="Invisionapp Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/html.svg') }}" alt="HTML Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/learvel.svg') }}" alt="Laravel Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/php.svg') }}" alt="PHP Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/sql.svg') }}" alt="SQL Icon"></li>
					<li class="small-1 large-1"><img src="{{ asset('img/tools/python.svg') }}" alt="Python Icon"></li>
				</ul>
			</div>
			<div class="large-6 column frontend  panel">
				<h2 class="fronted--title ">Digital Ocea</h2>
				<a class="fronted--link" href="" target="_blank"><img src="{{ asset('/img/supply_ocean.svg')  }}"></a>
				<p class="frontend--description"></p>
				<h3 class="">Tools Used</h3>
				<ul class="inline-list">
					<li class="small-4 medium-2 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
				</ul>
			</div>
	</div>
</div>

@endsection
