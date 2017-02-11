@extends('layouts.master')
@section('title', 'About')
@section('description')
@section('content')

<div class="container about">
  <div class="img-panel img-panel__general"></div>
  <div class="container container--white containter--about">
    <h1 class="h2 text-center">About Me</h1>
    <div class="row text-center">
      <div class=" column small-4 large-4 psych">
        <div class="about-btn__psych">
          <img data-btn="psych" src="{{asset('/img/LOVE_FEELINGS.svg')}}" alt="" />
          <h3 data-change-title="default"><strong>Psychology</strong></h3>
        </div>
      </div>
      <div class="column small-4 large-4 code">
        <div class="about-btn__code">
          <img data-btn="code" src="{{asset('/img/WEB_DESIGN0.svg')}}" alt="">
          <h3 data-change-title="code"><strong>Code</strong></h3>
        </div>
      </div>
      <div class="column small-4 large-4 art">
        <div class="about-btn__art">
          <img data-btn="art" src="{{asset('/img/INSPIRATION.svg')}}" alt="" />
          <h3><strong>Art</strong></h3>  
        </div>
      </div>
    </div>
{{--     <p id="content" data-change-content="code" class="large-8 large-centered small-text-justify hide">Learning to code started
      as a new year resolution that quickly turn into a passion. Being mostly self
      taught, I thrived on the workshops proved by non profites such as <a target="_blank" href="https://www.girldevelopit.com/chapters/los-angeles">
      <span>Girl Devlop It Los Angles</span></a>. I landed my first Frontend devloper position at <a href="http://www.metalab.csun.edu" target="_blank"><span>
      Meta+ Lab</span></a> where I was able polish my skills and work on real world applications while benifiting from amazing mentorship.
    </p>
    <p id="content" data-change-content="psych" class="large-8 large-centered small-text-justify hide">Learning psychology
      taught me about the importances
    </p>
    <p id="content" data-change-content="art" class="large-8 large-centered small-text-justify hide"> Art has been a part of my life for as long as I could remember.
      As an art minor, I focused on painting. During my time at CSUN I had the pleasure of working with an amzing group to artist to paint <a href="http://arttreeoflife.com/" target="_blank"><em>Art De La Vida: Tree of Life Honorning Diversity, Icons, And Inspiration</em></a> mural, located in CSUN Art department.
    </p>
    <p id="content" data-change-content="default" class="large-8 large-centered small-text-justify ">Studying  psycholgoy showed thought me how and why people thing the way the do. ˜
    </p> --}}
    <h2 class="large-9 h3 large-centered small-text-justify ">
      With an education in psychology, a love for art, and zealous curiosity for technology, I've become a hybrid UX/UI Desginer &amp; Frontend Devloper. 
      <br>
      I'm almost a unicorn! Well, ... I guess that makes me a horse.
    </h2>
    <br>
{{--     <h2 class="large-9 h3 large-centered small-text-justify ">
      Being a self thaught devloper, I've trived on  workshops proved by non profites such as <a target="_blank" href="https://www.girldevelopit.com/chapters/los-angeles"><span>Girl Devlop It Los Angles</span></a> to continuously expand my skill set. 
    </h2> --}}
  {{-- </div> --}}
    <div class="container container--off-white containter--recent-projects">
      <h1 class="h2 text-center">Recent Projects</h1>
      <div class="project-boxs row">

        <div class="project-box th column large-4 panel"> 
          <a href="href="{{ url('/project/moodbook') }}""><img class="test-img " alt="MoodBook Logo" src="{{asset('/img/moodbook_logo.svg')}}"></a>
          <div class="project-box--info__bottom">
            <div class="container panel">
                <h2>MoodBook</h2>
                <h3 class="h4">Its like a mood ring for your words. I desgined &amp; coded a digital journal that anyanlys your words and generates colors in real time.</h3>
                <h4><a href="{{ url('/project/moodbook') }}">Read More</a></h4>
            </div>
          </div>
        </div>

        <div class="project-box th column large-4 panel"> 
          <a href="href="{{ url('/project/estify') }}""><img class="test-img " alt="Estify Logo" src="{{asset('/img/estify_logo.svg')}}"></a>
          <div class="project-box--info__bottom">
            <div class="container panel">
                <h2>Estify</h2>
                <h3 class="h4">Who knew autobody software could be sexy? In full start up mood, I between my UX/UI and Frontend to get things done.</h3>
                <h4><a blank="" href="{{ url('/project/estify') }}">Read More</a></h4>
            </div>
          </div>
        </div>

        <div class="project-box th column large-4 panel"> 
          <a href="href="{{ url('/project/metalab') }}""><img class="test-img " alt="Meta+ Lab Logo" src="{{asset('/img/metalab_logo.svg')}}"></a>
          <div class="project-box--info__bottom">
            <div class="container panel">
                <h2>Meta+ Lab</h2>
                <h3 class="h4">Explor. Learn. Go Beyond. We built application with real clients on real projects.</h3>
                <h4><a blank="" href="{{ url('/project/metalab') }}">Read More</a></h4>
            </div>
          </div>
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
