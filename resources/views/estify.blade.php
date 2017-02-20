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
        <div class="row"></div>
    </div>
</div>
@endsection
