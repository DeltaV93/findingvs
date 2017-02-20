@extends('layouts.master')
@section('title', 'Welcome')
@section('description')
@section('content')

<div class="container about ">
  <div class="align-center main small-12 large-12 welcome--container landing">
    <div class="row landing">
      <h1 class="text-center font--title text-white">Valerie Sharp</h1>
      <h2 class="text-white text-center">UX Designer / Frontend Devloper </h2>
      @can('edit_work')
        <h1><a href="#">Need to make some update?</a></h1>
      @endcan

      @can('manage_user')
        <h1><a href="#">Edit these users</a></h1>
      @endcan
    </div>
    {{-- <div class="row"> --}}
      {{-- <h3 class="text-white text-center">UX Designer / Frontend Devloper </h3>     --}}
    {{-- </div>   --}}
    </div>
  </div>
  {{-- <div class="img-panel img-panel__general"></div> --}}
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
    <div class="row">
      <h2 class=" column h4 small-only-text-center large-centered text--body">
        <br/>
        With an education in psychology, a love for art, and zealous curiosity for technology, I've become a hybrid UX/UI Desginer &amp; Frontend Devloper.
        <br/>
        <br/>
        I'm almost a unicorn! <br /><br/> Well, ... I guess that makes me a horse.
        <br />
        <br />
      </h2>
      <br>
    </div>

    <div class="container container--off-white containter--recent-projects">
      <h1 class="h2 text-center">Recent Roles</h1>
      <div class="project-boxs row">

        <div class="project-box th column large-4 panel">
          <a href="{{ url('/project/moodbook') }}"><img class="test-img " alt="MoodBook Logo" src="{{asset('/img/MoodBook_Logo.svg')}}"></a>
          <div class="project-box--info__bottom">
            <div class="container panel">
                <h2>MoodBook</h2>
                <h3 class="h5 text--body">Its like a mood ring for your words. I desgined &amp; coded a digital journal that anyanlys your words and generates colors in real time.</h3>
                <h4><a href="{{ url('/project/moodbook') }}">Read More</a></h4>
            </div>
          </div>
        </div>

        <div class="project-box th column large-4 panel">
          <a href="{{ url('/project/estify') }}"><img class="test-img " alt="Estify Logo" src="{{asset('/img/estify_logo.svg')}}"></a>
          <div class="project-box--info__bottom">
            <div class="container panel">
                <h2>Estify</h2>
                <h3 class="h5 text--body">Who knew autobody software could be sexy? In full start up mood, I between my UX/UI and Frontend to get things done.</h3>
                <h4><a blank="" href="{{ url('/project/estify') }}">Read More</a></h4>
            </div>
          </div>
        </div>

        <div class="project-box th column large-4 panel">
          <a href="{{ url('/project/metalab') }}"><img class="test-img " alt="Meta+ Lab Logo" src="{{asset('/img/metaLab_logo.svg')}}"></a>
          <div class="project-box--info__bottom">
            <div class="container panel">
                <h2>Meta+ Lab</h2>
                <h3 class="h5 text--body">Explor. Learn. Go Beyond. We built application with real clients on real projects.</h3>
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
<script>

 $( document ).ready(function() {
   var welcomeBlock = $('.landing');
  //  Fadein the header img on load
   welcomeBlock.css('display', 'none').fadeIn(1600);
  //  Show navbar when you scroll down
  const topNavbar = $('.top');
  topNavbar.css('display', 'none');
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $(topNavbar).fadeIn(600);
    }
});
 });
</script>
@endsection
