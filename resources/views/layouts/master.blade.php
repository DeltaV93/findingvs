<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Valerie Sharp,Designer,Developer,UI,UX,Valerie Sharp Devlopment,Web Design,Interface Design,User Experience Design,Front-End Development,CSS,California,los angeles,Freelance Developer,MODX developer">
    <meta property="og:description" content="Freelance Front-end Developer producing high quality responsive websites and exceptional user experience">
    {{-- <meta property="og:description" content="A Front-end Developer's Portfolio"> --}}
    <meta name="description" content="Valerie Sharp is a UX Designer and Frontend developer specializing in web, user interfaces and user experiences. She designs, She codes, and is available for work.">
    <meta name="author" content="Valerie Sharpr">
    <meta name="copyright" content="Copyright Valerie Sharp">

    <title>@yield('title') | Valerie Sharp</title>
    <meta name="description" content="@yield('description')">

    <link rel="icon" href="{!! asset('favicon.png') !!}" type="image/x-icon">

        {{-- APP STYLESHEETS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.3/foundation.min.css">
    {!! HTML::style('css/app.css') !!}
    {!! HTML::style('css/valerie.css') !!}
    <body id="gradient">
    {{-- <body style="background-color: lightblue;"> --}}
{{-- DO NOT SHOW NAVBAR ON WELCOME --}}
        @if (Request::path() != '/')
            <div class="top-bar sticky">
              <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                  <li class="menu-text text-primary"> </li>
                  <li><a href="{{ url('/about') }}">Home</a></li>
                  <li><a href="{{ url('/project') }}">Process</a></li>
                  <li><a href="{{ url('/resume') }}">Resume</a></li>
                  <li><a href="#" data-open="contactModal">Contact</a></li>
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
            
<div class="reveal" id="contactModal" aria-labelledby="exampleModalHeader11" data-reveal>
  <h1 id="exampleModalHeader11">Hey, this is Valerie leave your message after the beep</h1>
  <p class="lead">Beeeeeeeeeeeeepppppppp</p>
    <form>
      <div class="row">
        <div class="medium-6 columns">
          <label>Name
            <input type="text" placeholder="Your Name">
          </label>
        </div>
        <div class="medium-6 columns">
          <label>Email
            <input type="email" placeholder="Email">
          </label>
        </div>
      </div>
      <div class="medium-12 columns">
          <label>
           Message
              <textarea placeholder="Please enter your message here"></textarea>
        </label>      
      </div>
      <button class="left" type="submit">Send</button>
    </form>  

  <button class="close-button" data-close aria-label="Close Accessible Modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>            
        @include('layouts.partials.footer')
        {{-- APP CONTENT ENDS --}}

        {{-- APP SCRIPTS --}}
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        {!! HTML::script('js/foundation.min.js') !!}
        {!! HTML::script('js/app.js') !!}
        <script scr="https://cdn.jsdelivr.net/foundation/6.2.4-rc2/foundation.min.js"></script>
        <script src="https://cdn.jsdelivr.net/g/foundation@6.2.3(foundation.min.js+js/foundation.abide.js+js/foundation.accordion.js+js/foundation.accordionMenu.js+js/foundation.core.js+js/foundation.drilldown.js+js/foundation.dropdown.js+js/foundation.dropdownMenu.js+js/foundation.equalizer.js+js/foundation.interchange.js+js/foundation.magellan.js+js/foundation.offcanvas.js+js/foundation.orbit.js+js/foundation.responsiveMenu.js+js/foundation.responsiveToggle.js+js/foundation.reveal.js+js/foundation.slider.js+js/foundation.sticky.js+js/foundation.tabs.js+js/foundation.toggler.js+js/foundation.tooltip.js+js/foundation.util.box.js+js/foundation.util.keyboard.js+js/foundation.util.mediaQuery.js+js/foundation.util.motion.js+js/foundation.util.nest.js+js/foundation.util.timerAndImageLoader.js+js/foundation.util.touch.js+js/foundation.util.triggers.js)"></script>
        <script type="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.reveal.js"></script>

        <script type="text/javascript">
            $(document).foundation();
        </script>
        @yield('scripts')
    </body>
</html>
