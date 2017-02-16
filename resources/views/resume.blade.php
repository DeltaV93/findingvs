@extends('layouts.master')
@section('css')
{{-- <link rel="stylesheet" href="../../stylesheets/coloringpageprint.css" type="text/css" media="print" /> --}}
@endsection
@section('title', 'About')
@section('description')
@section('content')
<div class="row">
	<div class="resume--img column small-2 medium-3 large-2">
		<div class="panel panel--circle">
			<div class="panel panel--circle">
				<img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAfMAAAAJDNkMDYzYmU1LTQ1ZDYtNGY0OS1iOTAwLWI5NTc0ODE4M2JjYw.jpg" alt="Profile Image Of Valerie Sharp">
			</div>
		</div>
	</div>
	<div class="small-12 medium-8 column">
		<div class=" left resume__name">
			<h1 class="resume__name font--title ">Valerie Sharp</h1>
		</div>
		<div class="left large-8">
			<h2 class="h3 resume__title">UX/UI Designer & Frontend Developer</h2>	
		</div>
	</div>
	<div class="header__btns  right">
		<div class="tiny secondary button-group">
		  <a class="button" href="#" data-open="contactModal">Contact</a>
		  <a class="button">PDF</a>
		  {{-- <a class="button">Print</a> --}}
		</div>		
	</div>
</div>
<div class="container container--white">
	<div class="row">
		<h3 class="h1 text-center">Resume</h3>
	</div>
	<div class="row resume--header">
		<h4 class="h3 resume__heading--top">PROFESIONAL PROFILE</h4>
		<p class="text--intro">Frontend Developer committed to developing polished user interfaces that raise the bar for usability and design. Skilled in UX/UI development, with a strong command of HTML, CSS/Sass, Bootstrap, JavaScript, and libraries.</p>
	</div>
	<div class="row" >
		<div class="column large-6">
			<h4 class="h3 heading">WORD EXPERIENCE</h4>
			<div class="job" >
				<h5><strong>Estify / <span class="job__date">Feb 2014 - Present</span></strong></h5>
				<h6 class="job--title"><strong>UX/UI Designer Frontend Developer</strong></h6>
				<p class="job--details">Create wireframes and prototypes for new website layout, along with converting the website to be responsive. Run user testing to confirm the new design was accessible to all of our users. With HTML, CSS, JavaScript and PHP, I built and reusable UI kits that allowed used to apply their own branding.</p>
			</div>
			<div class="job" >
				<h5><strong>Meta+ Lab /<span class="job__date">Oct 2015 - May 2016</span></strong></h5>
				<h6 class="job--title"><strong>Frontend Developer</strong></h6>
				<p class="job--details">Conduct user research and testing to produce user- centered and accessible designs. As a Front-End Developer, I take clients visions and translate them into clean web interfaces while applying to 508 compliance best practices. Using agile development process, I am able to meet all project deadlines.</p>
			</div>
			<div class="job" >
				<h5><strong>Tree Of Life Mural / <span class="job__date">Oct 2015 - May 2015</span></strong></h5>
				<h6 class="job--title"><strong>Frontend Developer / Artist</strong></h6>
				<p class="job--details">Collaborated with a group of artists on the design process, along with executing it from start to finish. Worked on creating the layout and needed paperwork to present to the committee for approval. Planned and launched a website to promote all of the artists involved in the process.</p>
			</div>
		</div>
		<div class="column large-6" >
		 <div class="resume__personal">
			<h4 class="h3 heading">PERSONAL SKILLS</h4>
			<div class="row personal--box">
				@foreach($personals as $personalSkill)
					<div class="small-6 medium-2 large-2 column personal--skill">
						{{ HTML::image('img/personal/'.$personalSkill->img ) }}
						<p >{{ strtolower($personalSkill->skill)  }}</p>
					</div>
				@endforeach
			</div>
		 </div>
		 <div class="resume__profesional">
			<h4 class="h3 heading ">PROFESIONAL SKILLS</h4>
			<div class="profesional--box">
				@foreach($profesionals as $profesional)
					<div class="row profesional--skill">
						<lable class="column small-4 medium-2 large-4">{{ $profesional->skill }}</lable>
						<div class="small-8 medium-8 large-8 right">
							<div class="secondary progress" role="progressbar" tabindex="0" aria-valuenow="25" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
								<div class="progress-meter" style="width: {{$profesional->percent}}%"></div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		 </div>
		</div>
	</div>
</div>
@endsection