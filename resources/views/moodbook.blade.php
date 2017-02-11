@extends('layouts.master')
@section('title', 'About')
@section('description')
@section('content')
<div class="container container--white project">
    <div class="row column">   
        
    </div>
    <div class="row">
        <div class=" column small-3 medium-3 large-3">
            <div class="th">
                <a target="_blank" href="http://moodbook.in/">
                    <img src="{{ asset('img/moodbook_logo.png') }}">
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
        <div class="column small-6">
            <h2>Tools Used</h2>
            <dl class="no-bullet">
                <li><strong>Planing Tools </strong></li>
                <dl class="no-bullet inline-list">
                    <li><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon">Sketch</li>
                    <li>MindNode</li>
                    <li><img src="{{ asset('img/tools/asana.svg') }}" alt="Asana Icon">Asana</li>
                    <li><img src="{{ asset('img/tools/invision.svg') }}" alt="Invisionapp Icon">Invision</li>
                </dl>
            </dl>
        </div>
        <div class="column small-6">
            <h2>Technology Used</h2>
                <dl class="no-bullet">
                    <li><strong>Frontend</strong>
                        <dl class="no-bullet inline-list">
                            <li><img src="{{ asset('img/tools/html.svg') }}" alt="HTML Icon">Html</li>
                            <li><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon">Sass</li>
                            <li><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon">Javascript</li>
                            <li><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon">Boostrap</li>
                        </dl>
                    </li>
                </dl>
                <dl class="no-bullet">
                    <li><strong>Backend</strong>
                        <dl class="no-bullet inline-list">
                            <li><img src="{{ asset('img/tools/learvel.svg') }}" alt="Laravel Icon">Laravel</li>
                            <li><img src="{{ asset('img/tools/php.svg') }}" alt="PHP Icon">PHP</li>
                            <li><img src="{{ asset('img/tools/sql.svg') }}" alt="SQL Icon">SQL</li>
                            <li><img src="{{ asset('img/tools/python.svg') }}" alt="Python Icon">Python</li>
                        </dl> 
                    </li>
                </dl>
        </div>
    </div>
    <div class="row">
        <h1>The Process</h1>
        <div class="row">
            <div class="column">
                <h2>Understanding the Goals</h2>
                <h4>This project needs to be accessable from any device, and usable for people with varying skill sets. Keeping this in mind I was able to move from idea to production in no time!</h4>
            </div>
            <div class="row">
                <div class="column">
                    <div class="small-3 th">
                        <img src="" alt="">
                        <p>I start off making a site map to understand what is needed to reach the end goal for a user.</p>
                    </div>
                    <div class="small-3 th">
                        <img src="" alt="">
                        <p>Creating low fedility wire frames help to understand all the moving parts of each screen.</p>
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