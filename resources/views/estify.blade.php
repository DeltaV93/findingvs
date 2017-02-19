@extends('layouts.master')
@section('title', 'Estify')
@section('description')
@section('content')
<div class="container container--white project">
    <div class="row column"></div>
    <div class="row project-header">
        <div class=" column small-12 medium-3 large-3">
            <div class="th">
                <a target="_blank" href="http://moodbook.in/">
                    <img src="{{ asset('img/estify_logo.svg') }}">
                </a>
            </div>
        </div>
        <div class=" column small-12 medium-9 large-9">
            <div class="project-info">
                <h1>Estify<small> Bring Body Shops Into the Digital Age.</small></h1>
                <h2 class="h5">
                    <strong>Role</strong> UX/UI Desginer &amp; Frontend Devolpoer
                </h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column medium-7">
            <h2 class="h5"><strong>The Promblem</strong></h2>
            <ul class="text--body">
                <li>Users leave the homepage still confused about what the company does</li>
                <li>People had to call in to create an account</li>
                <li>Branding seemed outdated and was not same thought the website</li>
                <li>Website was not mobile friendly</li>
                <li>Frontend lacked any stucture</li>
            </ul>
        </div>
        <div class="column medium-5">
            <h2 class="h5"><strong>The Solutions</strong></h2>
            <ul class="text--body">
                <li>Highlight what we do but push why we do it</li>
                <li>Create a simple onbording flow</li>
                <li>Create, document, and code a reusable UI kit</li>
                <li>Make the website responsive with boostrap</li>
                <li>Use gulp to automate Sass compiling &amp; view templating styltem</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <h2 class="h3"><strong>Tools &amp; Stack</strong></h2>
        <div class="row">
            <div class="column small-6">
                <dl class="no-bullet">
                    <li><strong>UX &amp; Planing</strong></li>
                    <dl class="no-bullet inline-list">
                        <li class="small-3 medium-2 large-2"><img src="{{ asset('img/tools/sketch.svg') }}" alt="Sketch Icon">Sketch</li>
                        <li class="small-3 medium-2 large-2"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon">MindNode</li>
                        <li class="small-3 medium-2 large-2"><img src="{{ asset('img/tools/asana.svg') }}" alt="Asana Icon">Asana</li>
                        <li class="small-3 medium-2 large-2"><img src="{{ asset('img/tools/invision.svg') }}" alt="Invisionapp Icon">Invision</li>
                    </dl>
                </dl>
            </div>
            <div class="column small-6">
                <dl class="no-bullet">
                    <li><strong>Frontend</strong>
                        <dl class="no-bullet inline-list">
                            <li class="small-3 medium-2 large-2"><img src="{{ asset('img/tools/html.svg') }}" alt="HTML Icon">Html</li>
                            <li class="small-3 medium-2 large-2"><img src="{{ asset('img/tools/sass.svg') }}" alt="Sass Icon">Sass</li>
                            <li class="small-3 medium-2 large-2"><img src="{{ asset('img/tools/gulp.svg') }}" alt="Sass Icon">Gulp</li>
                            <li class="small-3 medium-2 large-2"><img src="{{ asset('img/tools/js.svg') }}" alt="Javascript Icon">Javascript</li>
                            <li class="small-3 medium-2 large-2"><img src="{{ asset('img/tools/Boostrap.svg') }}" alt="Boostrap Icon">Boostrap</li>
                        </dl>
                    </li>
                </dl>
            </div>
        </div>
    </div>
    <div class="row">
        <h2 class="h3"><strong>Example</strong></h2>
        <div class="row">
            <div class="column">
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
