@extends('layouts.master')
@section('title', 'MoodBook')
@section('description')
@section('content')
<div class="container container--white project">
    <div class="row column"></div>
    <div class="row">
        <div class=" column small-3 medium-3 large-3">
            <div class="th">
                <a target="_blank" href="http://moodbook.in/">
                    <img src="{{ asset('img/estify_logo.png') }}">
                </a>
            </div>
        </div>
        <div class=" column small-9 medium-9 large-9">
            <div class="project-info">
                <h1>MoodBook<small> It's a mood ring for your words.</small></h1>
                <h2 class="h5">
                    <strong>Overview</strong>
                    <br>
                    I created a digital joural website that counts the postive and negative words turns those words into colors. If your entry is very postive and uses "happy" words, it will out put bright colors. But if your entry shows your feeling kinda blue, darker colors well be displayed.
                </h2>
            </div>
        </div>
    </div>
    <div class="row">
        <h2 class="h3"><strong>Tools &amp; Technology Used</strong></h2>
        <div class="row">
            <div class="column small-4">
                <dl class="no-bullet">
                    <li>UX &amp; Planing</li>
                    <dl class="no-bullet inline-list text-center">
                        <li class="small-2"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon">Sketch</li>
                        <li class="small-2"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon">MindNode</li>
                        <li class="small-2"><img src="{{ asset('img/tools/asana.svg') }}" alt="Asana Icon">Asana</li>
                        <li class="small-2"><img src="{{ asset('img/tools/invision.svg') }}" alt="Invisionapp Icon">Invision</li>
                    </dl>
                </dl>
            </div>
            <div class="column small-4">
                <dl class="no-bullet">
                    <li>Frontend
                        <dl class="no-bullet inline-list text-center">
                            <li class="small-2"><img src="{{ asset('img/tools/html.svg') }}" alt="HTML Icon">Html</li>
                            <li class="small-2"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon">Sass</li>
                            <li class="small-2"><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon">Javascript</li>
                            <li class="small-2"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon">Boostrap</li>
                        </dl>
                    </li>
                </dl>
            </div>
            <div class="column small-4">
                <dl class="no-bullet">
                    <li>Backend
                        <dl class="no-bullet inline-list text-center">
                            <li class="small-2"><img src="{{ asset('img/tools/learvel.svg') }}" alt="Laravel Icon">Laravel</li>
                            <li class="small-2"><img src="{{ asset('img/tools/php.svg') }}" alt="PHP Icon">PHP</li>
                            <li class="small-2"><img src="{{ asset('img/tools/sql.svg') }}" alt="SQL Icon">SQL</li>
                            <li class="small-2"><img src="{{ asset('img/tools/python.svg') }}" alt="Python Icon">Python</li>
                        </dl> 
                    </li>
                </dl>
            </div>
        </div>
    </div>
    <div class="row">
        <h2 class="h5"><strong>The Process</strong></h2>
        <div class="row">
            <div class="column">
                <h3 class="h3">Understanding the Goals</h3>
                <h4>This project needs to be accessable from any device, and usable for people with varying skill sets. Keeping this in mind I was able to move from idea to production in no time!</h4>
            </div>
            <div class="row">
                <div class="column">
                    <div class="small-3 th">
                        <img src="" alt="">
                        <p>Created user personas to understand the users needs, wants, and fustrations. I mapped this information with the the personal goals I had for the website, and used this as a guide to figure what could be acomplished in the given time period.</p>
                    </div>
                    <div class="small-3 th">
                        <img src="" alt="">
                        <p>I start off making a site map to understand what is needed to reach the end goal for a user.</p>
                    </div>
                    <div class="small-3 th">
                        <img src="" alt="">
                        <p>I created a set of moodbords and style tiles to get a better understand of the look and feel of the website.</p>
                    </div>                    
                    <div class="small-3 th">
                        <img src="" alt="">
                        <p>With the UI kit I built, I creating low fedility wire frames help to understand all the moving parts of each screen.</p>
                    </div>
                    <div class="small-3 th">
                        <img src="" alt="">
                        <p>Creating Hi-fidility screens make help to make sure the branding is constant, and there are no gaps in the flow.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection