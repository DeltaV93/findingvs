@extends('layouts.master')
@section('title', 'About')
@section('description')
@section('content')
<div class="row">
	<div class="resume--img column large-2">
		<div class="panel panel--circle">
			<div class="panel panel--circle">
				<img src="" alt="Profile Image Of Valerie Sharp">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="column left large-5 resume__name">
			<h1 class="resume__name font--title ">Valerie Sharp</h1>
		</div>
		<div class="column left large-8">
			<h2 class="h3 resume__title">UX/UI Designer & Frontend Developer</h2>	
		</div>
	</div>
	<div class="header__btns  right">
		<div class="tiny secondary button-group">
		  <a class="button">Contact</a>
		  <a class="button">PDF</a>
		  <a class="button">Print</a>
		</div>		
	</div>
</div>
<div class="container container--white">
	<div class="row">
		<h3 class="h1 text-center">Resume</h3>
	</div>
	<div class="row">
		<h4 class="h3 resume__heading--top">PROFESIONAL PROFILE</h4>
		<p class="text--intro">Frontend Developer committed to developing polished user interfaces that raise the bar for usability and design. Skilled in UX/UI development, with a strong command of HTML, CSS/Sass, Bootstrap, JavaScript, and libraries.</p>
	</div>
	<div class="row">
		<div class="column large-6">
			<h4 class="h3 heading">WORD EXPERIENCE</h4>
			<div class="job">
				<h5><strong>Estify / <span class="job__date">Feb 2014 - Present</span></strong></h5>
				<h6><strong>UX/UI Designer Frontend Developer</strong></h6>
				<p>Create wireframes and prototypes for new website layout, along with converting the website to be responsive. Run user testing to confirm the new design was accessible to all of our users. With HTML, CSS, JavaScript and PHP, I built and reusable UI kits that allowed used to apply their own branding.</p>
			</div>
			<div class="job">
				<h5><strong>Meta+ Lab /<span class="job__date">Oct 2015 - May 2016</span></strong></h5>
				<h6><strong>Frontend Developer</strong></h6>
				<p>Conduct user research and testing to produce user- centered and accessible designs. As a Front-End Developer, I take clients visions and translate them into clean web interfaces while applying to 508 compliance best practices. Using agile development process, I am able to meet all project deadlines.</p>
			</div>
			<div class="job">
				<h5><strong>Tree Of Life Mural / <span class="job__date">Oct 2015 - May 2015</span></strong></h5>
				<h6><strong>Frontend Developer / Artist</strong></h6>
				<p>Collaborated with a group of artists on the design process, along with executing it from start to finish. Worked on creating the layout and needed paperwork to present to the committee for approval. Planned and launched a website to promote all of the artists involved in the process.</p>
			</div>
		</div>
		<div class="column large-6">
		 <div class="resume__personal">
			<h4 class="h3 heading">PERSONAL SKILLS</h4>
			@for($i = 0; $i < 12; $i++)
				<div class="large-2 column">
					<div class="panel"></div>
				</div>
			@endfor
		 </div>
		 <div class="resume__profesional">
			<h4 class="h3 heading ">PROFESIONAL SKILLS</h4>
			@for($i = 0; $i < 12; $i++)
				<lable class="column large-4">HTML  CSS</lable>
				<div class="large-8 right">
					<div class="secondary progress" role="progressbar" tabindex="0" aria-valuenow="25" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
						<div class="progress-meter" style="width: 95%"></div>
					</div>
				</div>
			@endfor
		 </div>
		</div>
	</div>
</div>
@endsection