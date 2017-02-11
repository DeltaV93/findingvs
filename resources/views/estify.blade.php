@extends('layouts.master')
@section('title', 'About')
@section('description')
@section('content')
<div class="container container--white project">
    <div class="row column">   
        <h1>Estify<small> Bring Body Shops Into the Digital Age.</small></h1>
    </div>
    <div class="row">
        <div class=" column small-3 medium-3 large-3">
            <div class="th">
                <a target="_blank" href="http://moodbook.in/">
                    <img src="{{ asset('img/moodbook.png') }}">
                </a>
            </div>
        </div>
        <div class=" column small-9 medium-9 large-9">
            <div class="project-info">
                <h2 class="h4">
                    <strong>Overview</strong>
                    <br>
                    
                </h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column small-6">
            <h2>Tools Used</h2>
            <dl>
                <li>Sketch</li>
                <li>MindNode</li>
                <li>Asana</li>
                <li>Invisionapp</li>
                <li>Sublime</li>
            </dl>
        </div>
        <div class="column small-6">
            <h2>Technology Used</h2>
                <ul>
                    <div class="column small-6">
                        <li><strong>Frontend</strong>
                            <ul>
                                <li>Html</li>
                                <li>Sass</li>
                                <li>Javascript</li>
                                <li>Boostrap</li>
                            </ul>
                        </li>
                    </div>
                    <div class="column small-6">
                        <li><strong>Backend</strong>
                            <ul>
                                <li>Laravel</li>
                                <li>PHP</li>
                                <li>SQL</li>
                            </ul> 
                        </li>
                    </div>
                </ul>
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