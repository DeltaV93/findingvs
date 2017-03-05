<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Valerie Sharp,Designer,Developer,UI,UX,Valerie Sharp Devlopment,Web Design,Interface Design,User Experience Design,Front-End Development,CSS,California,los angeles,Freelance Developer,web developer">
    <meta property="og:description" content="Freelance Front-end Developer producing high quality responsive websites and exceptional user experience">
    <meta property="og:description" content="A Front-end Developer's Portfolio">
    <meta name="description" content="Valerie Sharp is a UX Designer and Frontend developer specializing in web, user interfaces and user experiences. She designs, She codes, and is available for work.">
    <meta name="author" content="Valerie Sharpr">

    <title>@yield('title') | Valerie Sharp</title>
    <meta name="description" content="@yield('description')">

    <link rel="icon" href="{!! asset('favicon.png') !!}" type="image/x-icon">

    {{-- APP STYLESHEETS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.3/foundation.min.css">
    {!! HTML::style('css/app.css') !!}
    {!! HTML::style('css/valerie.css') !!}
    @yield('css')
  </head>
  <body id="gradient">
    <div class="top">
        <nav class="top-bar">
            <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li class="menu-text text-primary"> </li>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/project') }}">Projects</a></li>
                    <li><a href="{{ url('/resume') }}">Resume</a></li>
                    <li><a  data-open="contactModal">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
        {{-- APP CONTENT BEGINS --}}
        @include('layouts.partials.header')
            <div class="wrapper">
                @yield('content')
            </div>
            {{-- MODALS --}}

        <div class="reveal" id="contactModal" aria-labelledby="exampleModalHeader11" data-reveal data-options="closeOnClick:true; data-reset-on-close;">
          @include('layouts.modal.contact')
        </div>
        @include('layouts.partials.footer')
        {{-- APP CONTENT ENDS --}}

        {{-- APP SCRIPTS --}}
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        {{-- <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" integrity="sha256-JklDYODbg0X+8sPiKkcFURb5z7RvlNMIaE3RA2z97vw=" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> --}}
        {{-- {!! HTML::script('js/foundation.min.js') !!} --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/js/foundation.min.js"></script>
        {{-- <script scr="https://cdn.jsdelivr.net/foundation/6.2.4-rc2/foundation.min.js"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/g/foundation@6.2.3(foundation.min.js+js/foundation.abide.js+js/foundation.accordion.js+js/foundation.accordionMenu.js+js/foundation.core.js+js/foundation.drilldown.js+js/foundation.dropdown.js+js/foundation.dropdownMenu.js+js/foundation.equalizer.js+js/foundation.interchange.js+js/foundation.magellan.js+js/foundation.offcanvas.js+js/foundation.orbit.js+js/foundation.responsiveMenu.js+js/foundation.responsiveToggle.js+js/foundation.reveal.js+js/foundation.slider.js+js/foundation.sticky.js+js/foundation.tabs.js+js/foundation.toggler.js+js/foundation.tooltip.js+js/foundation.util.box.js+js/foundation.util.keyboard.js+js/foundation.util.mediaQuery.js+js/foundation.util.motion.js+js/foundation.util.nest.js+js/foundation.util.timerAndImageLoader.js+js/foundation.util.touch.js+js/foundation.util.triggers.js)"></script> --}}
        {{-- <script type="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.reveal.js"></script> --}}
        {!! HTML::script('js/app.js') !!}


        <script type="text/javascript">
        $(document).foundation();
        $('form, .sound').css('display', 'block');
        var $userName = $('#name'),
        $userEmail = $('#email'),
        $userMessage = $('#message');
        $("form").validate();
        // Watch for send modal btn click
        $('form').submit( function (event) {
            event.preventDefault();
            // start ajax call w/POST
            $.ajax({
                type: 'POST',
                url: '/contact',
                data: {
                    name: $userName.val(),
                    email: $userEmail.val(),
                    _token: $('input[name=_token]').val(),
                    message: $userMessage.val()
                },
                beforeSend: function (event) {
                    $('#contactModal').toggleClass('sending');
                    // disable closing modal while ajx is happing
                },
                // on success show got it message
                success: function (event) {
                    $('#contactModal').toggleClass('sending');
                    $('.message__success').fadeIn(700).css('display', 'block');
                    $('form, .sound').css('display', 'none');
                    $('button[type="button"]').fadeIn(700).css('display', 'block');
                    // when the close btn is pressed, reset the form so
                    // the next time the user clicks on contact
                    // they can fill out the form
                },
                // on error show error/try again message
                error: function () {
                  alert('somethings not working');
                  $('#contactModal').toggleClass('sending');
                  $('.message__error').fadeIn(700).css('display', 'block');
                }
            })
        });
        $(document).ready( function(){
            $(".clear").on("click",function(){
              $("form div").removeClass("error");
              $("form label").removeClass("error");
              $("form")[0].reset();
            });
        });
        </script>
        @yield('scripts')
  </body>
</html>
