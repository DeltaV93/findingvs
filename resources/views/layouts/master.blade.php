<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>@yield('title') | Valerie Sharp</title>
        <meta name="description" content="@yield('description')">
        
    <link rel="icon" href="{!! asset('favicon.png') !!}" type="image/x-icon">
    
        {{-- APP STYLESHEETS --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation-flex.min.css">
    {{-- {!! HTML::style('css/foundation.css') !!} --}}
    {!! HTML::style('css/app.css') !!}
    {!! HTML::style('css/valerie.css') !!}
    <body id="gradient">
    {{-- <body style="background-color: lightblue;"> --}}
{{-- DO NOT SHOW NAVBAR ON WELCOME --}}
        @if (Request::path() != '/')
            <div class="top-bar">
              <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                  <li class="menu-text"> </li>
                  <li><a href="#">Frontend</a></li>
                  <li><a href="#">UX</a></li>
                  <li><a href="#">Resume</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
        @endif
    

        {{-- APP CONTENT BEGINS --}}
        @include('layouts.partials.header')
            <div class="wrapper">
                @yield('content')
            </div>
            {{-- MODALS --}}
            @yield('modal')
        @include('layouts.partials.footer')
        {{-- APP CONTENT ENDS --}}
        
        {{-- APP SCRIPTS --}}
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        {!! HTML::script('js/foundation.min.js') !!}
        {!! HTML::script('js/app.js') !!}
    </body>
</html>