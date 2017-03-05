@extends('layouts.master')

@section('Projects')
@section('description')
  {{-- Add Description --}}
@endsection

@section('content')
<h1 class="text-center text-white">Projects</h1>

<div class="container">
	<div class="row">
			<div class="frontend small-12 large-6 column">
					<div class="panel">
						<a href="{{ url('/project/pro') }}">
							<h2 class="fronted--title "><a class="fronted--link" href="{{ url('/project/pro') }}" >Estify Pro</a></h2>
							<a class="fronted--link" href="" ><img alt="Estify Pro Logo" src="{{ asset('img/pro_logo.svg') }}"></a>
							<p class="frontend--description"></p>
							<h3 class="">Tools Used</h3>
							<ul class="inline-list">
								<li class="small-1 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/asana.svg') }}" alt="Asana Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/invision.svg') }}" alt="Invisionapp Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/HTML.svg') }}" alt="HTML Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/gulp.svg') }}" alt="Sass Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon"></li>
							</ul>
					</a>
					</div>
			</div>
			<div class="frontend small-12 large-6 column">
				<a href="#">
					<div class="panel">
						<h2 class="fronted--title "><a class="fronted--link" href="{{ url('/project/email') }}" >Email Marketing</a></h2>
						<a class="fronted--link" href="{{ url('/project/email') }}"><img alt="Email Logo" src="{{asset('/img/email_logo.svg')}}"></a>
						<p class="frontend--description"></p>
						<h3 class="">Tools Used</h3>
						<ul class="inline-list">
							<li class="small-1 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/HTML.svg') }}" alt="HTML Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon"></li>
						</ul>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="frontend small-12 large-6 column">
					<div class="panel">
						<a href="{{ url('/project/estify') }}">
							<h2 class="fronted--title "><a class="fronted--link" href="{{ url('/project/estify') }}" >Estify</a></h2>
							<a class="fronted--link" href="" ><img alt="Estify Logo" src="{{ asset('img/estify_logo.svg') }}"></a>
							<p class="frontend--description"></p>
							<h3 class="">Tools Used</h3>
							<ul class="inline-list">
								<li class="small-1 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/asana.svg') }}" alt="Asana Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/invision.svg') }}" alt="Invisionapp Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/HTML.svg') }}" alt="HTML Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/gulp.svg') }}" alt="Sass Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon"></li>
								<li class="small-1 large-1"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon"></li>
							</ul>
					</a>
					</div>
			</div>
			<div class="frontend small-12 large-6 column">
				<a href="#">
					<div class="panel">
						<h2 class="fronted--title "><a class="fronted--link" href="{{ url('/project/metalab') }}" >Meta+ Lab</a></h2>
						<a class="fronted--link" href="{{ url('/project/metalab') }}"><img alt="Meta+ Lab Logo" src="{{asset('/img/metaLab_logo_2.svg')}}"></a>
						<p class="frontend--description"></p>
						<h3 class="">Tools Used</h3>
						<ul class="inline-list">
							<li class="small-1 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/HTML.svg') }}" alt="HTML Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/learvel.svg') }}" alt="Laravel Icon"></li>
						</ul>
					</div>
				</a>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="frontend small-12 large-6 column">
				<a href="#">
					<div class="panel">
						<h2 class="fronted--title "><a class="fronted--link" href="{{ url('/project/moodbook') }}" >MoodBook</a></h2>
						<a class="fronted--link" href="{{ url('/project/moodbook') }}" ><img alt="MoodBook Logo" src="{{asset('/img/MoodBook_Logo.svg')}}"></a>
						<p class="frontend--description"></p>
						<h3 class="">Tools Used</h3>
						<ul class="inline-list">
							<li class="small-1 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/asana.svg') }}" alt="Asana Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/invision.svg') }}" alt="Invisionapp Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/HTML.svg') }}" alt="HTML Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/learvel.svg') }}" alt="Laravel Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/php.svg') }}" alt="PHP Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/sql.svg') }}" alt="SQL Icon"></li>
							<li class="small-1 large-1"><img src="{{ asset('img/tools/python.svg') }}" alt="Python Icon"></li>
						</ul>
					</div>
				</a>
			</div>
			<div class="frontend small-12 large-6 column">
				<a href="#">
					<div class="panel">
						<h2 class="fronted--title "><a class="fronted--link" href="{{ url('/project/supply_ocean') }}" >Supply Ocean</a></h2>
						<a class="fronted--link" href="" ><img alt="Supply Ocean Logo" src="{{ asset('/img/supply_ocean.svg')  }}"></a>
						<p class="frontend--description"></p>
						<h3 class="">Tools Used</h3>
						<ul class="inline-list">
							<li class="small-4 medium-2 large-1"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon"></li>
						</ul>
					</div>
				</a>
			</div>
	</div>
</div>

@endsection
