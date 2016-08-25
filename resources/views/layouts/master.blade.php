<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title') | Valerie Sharp</title>
        <meta name="description" content="@yield('description')">

    <link rel="icon" href="{!! asset('favicon.png') !!}" type="image/x-icon">

        {{-- APP STYLESHEETS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.3/foundation.min.css">
    {!! HTML::style('css/foundation.css') !!}
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
        {{-- <div class=" switch container right">
            <p>Stop Color Change</p>
            <input id="exampleCheckboxSwitch" type="checkbox">
            <label for="exampleCheckboxSwitch">
                <span>Start</span>
                <span>Stop</span>
            </label>
        </div> --}}
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
        <script src="https://cdn.jsdelivr.net/g/foundation@6.2.3(foundation.min.js+js/foundation.abide.js+js/foundation.accordion.js+js/foundation.accordionMenu.js+js/foundation.core.js+js/foundation.drilldown.js+js/foundation.dropdown.js+js/foundation.dropdownMenu.js+js/foundation.equalizer.js+js/foundation.interchange.js+js/foundation.magellan.js+js/foundation.offcanvas.js+js/foundation.orbit.js+js/foundation.responsiveMenu.js+js/foundation.responsiveToggle.js+js/foundation.reveal.js+js/foundation.slider.js+js/foundation.sticky.js+js/foundation.tabs.js+js/foundation.toggler.js+js/foundation.tooltip.js+js/foundation.util.box.js+js/foundation.util.keyboard.js+js/foundation.util.mediaQuery.js+js/foundation.util.motion.js+js/foundation.util.nest.js+js/foundation.util.timerAndImageLoader.js+js/foundation.util.touch.js+js/foundation.util.triggers.js)"></script>
        {!! HTML::script('js/foundation.min.js') !!}
        {!! HTML::script('js/app.js') !!}
        @yield('scripts')
    </body>
</html>
