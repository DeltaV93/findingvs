@extends('layouts.master')
@section('title', 'About')
@section('description')
@section('content')

<div class="container about">
  <div class="img-panel img-panel__general"></div>
  <div class="container container__white containter--about">
    <h1 class="h2 text-center">About Me</h1>
    <div class="row text-center">
      <div class=" column small-4 large-4 psych">
        <div class="about-btn__psych">
          <img data-btn="psych" src="{{asset('/img/LOVE_FEELINGS.svg')}}" alt="" />
          <h3 data-change-title="default">Psychology</h3>
        </div>
      </div>
      <div class="column small-4 large-4 code">
        <div class="about-btn__code">
          <img data-btn="code" src="{{asset('/img/WEB_DESIGN0.svg')}}" alt="">
          <h3 data-change-title="code">Code</h3>
        </div>
      </div>
      <div class="column small-4 large-4 art">
        <div class="about-btn__art">
          <img data-btn="art" src="{{asset('/img/INSPIRATION.svg')}}" alt="" />
          <h3>Art</h3>  
        </div>
      </div>
    </div>
    <p id="content" data-change-content="code" class="large-8 large-centered small-text-justify hide">Learning to code started
      as a new year resolution that quickly turn into a passion. Being mostly self
      taught, I thrived on the workshops proved by non profites such as <a target="_blank" href="https://www.girldevelopit.com/chapters/los-angeles">
      <span>Girl Devlop It Los Angles</span></a>. I landed my first Front End devloper position at <a href="http://www.metalab.csun.edu" target="_blank"><span>
      Meta+ Lab</span></a> where I was able polish my skills and work on real world applications while benifiting form mentorship.
    </p>
    <p id="content" data-change-content="psych" class="large-8 large-centered small-text-justify hide">Learning psychology
      taught me about the importances
    </p>
    <p id="content" data-change-content="art" class="large-8 large-centered small-text-justify hide"> Art has been a part of my life for as long as I could remember.
      As an art minor, I focused on painting. During my time at CSUN I had the pleasure of working with an amzing group to paint
      the mural <a href="http://arttreeoflife.com/" target="_blank"><em>Art De La Vida: Tree of Life Honorning Diversity, Icons, And Inspiration</em></a>.
      It was not hard for me to take the skills I gained from the art classes
    </p>
    <p id="content" data-change-content="default" class="large-8 large-centered small-text-justify ">Graduated from
      California State University Northridge with a Bachlors in Psychology and a
      Minor in Arts. Durning my time in college centred my studies around
      Psychology, Code, and Art.
    </p>
  </div>
  <div class="container container__white containter--recent-projects">
    <h1 class="h2 text-center">Recent Projects</h1>
    <div class="project-boxs">
      <div class="project-box large-4">
        <div class="project-box--info__bottom">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore.
            <a href="#">Read More</a>
          </p>
        </div>
      </div>
      <div class="project-box large-4">
        <div class="project-box--info__bottom">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore.
            <a href="#">Read More</a>
          </p>
        </div>
      </div>
      <div class="project-box large-4">
        <div class="project-box--info__bottom">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore.
            <a href="#">Read More</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script type="text/javascript">

  // $('.code').hover( function(){
    // if ( ('#content').attr("change-content") === 'code'){
    // if ($(this).find('h3').attr('data-change-title') === 'code'){
        // $('.code>h3').toggleClass('text-primary');
        // alert("hey");
      // };

    // if ( ('#content').find('p')data('change-content') === 'code' ){
    //     // $($(this).toggleClass('hide'));
    //     alert("Hey");
    //   };
  // });

  $('.psych').click( function(){
    $('.psych>h3').addClass('text-primary');
    $('.art>h3').removeClass('text-primary');
    $('.code>h3').removeClass('text-primary');
    $('.img-panel').addClass('img-panel__general');
    $("[data-change-content = 'psych']").removeClass('hide');
    $("[data-change-content = 'default']").addClass('hide');
    $("[data-change-content = 'code']").addClass('hide');
    $("[data-change-content = 'art']").addClass('hide');
  });
  $('.art').click( function(){
    $('.art>h3').addClass('text-primary');
    $('.code>h3').removeClass('text-primary');
    $('.psych>h3').removeClass('text-primary');
    $('.img-panel').addClass('img-panel__art');
    $('.img-panel').removeClass('img-panel__general');
    $("[data-change-content = 'art']").removeClass('hide');
    $("[data-change-content = 'default']").addClass('hide');
    $("[data-change-content = 'psych']").addClass('hide');
    $("[data-change-content = 'code']").addClass('hide');
  });
  $('.code').click( function(){
    $('.code>h3').addClass('text-primary');
    $('.art>h3').removeClass('text-primary');
    $('.psych>h3').removeClass('text-primary');
    $("[data-change-content = 'code']").removeClass('hide');
    $("[data-change-content = 'default']").addClass('hide');
    $("[data-change-content = 'psych']").addClass('hide');
    $("[data-change-content = 'art']").addClass('hide');
  });


  </script>
@endsection
