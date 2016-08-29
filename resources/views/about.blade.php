@extends('layouts.master')

@section('title', 'About')

@section('description')

@section('content')
<div class="container about">

  <div class="img-panel img-panel__general">
  </div>

  <div class="container container--white containter--about">
    <h2  class="text-center">About Me</h2>
    <div class="row text-center">
      <div class="column small-4 large-4 psych">
        <img src="{{asset('/img/LOVE_FEELINGS.svg')}}" alt="" />
        <h3 data-change-title="default">Psychology</h3>
      </div>
      <div class="column small-4 large-4 code">
        <img src="{{asset('/img/WEB_DESIGN0.svg')}}" alt="">
        <h3>Code</h3>
      </div>
      <div class="column small-4 large-4 art">
        <img src="{{asset('/img/INSPIRATION.svg')}}" alt="" />
        <h3>Art</h3>
      </div>
    </div>
    <p id="content" data-change-content="default" class="small-text-justify ">Graduated from
      California State University Northridge with a Bachlors in Psychology and a
      Minor in Arts. Durning my time in college centred my studies around
      Psychology, Code, and Art.
    </p>
    <p id="content" data-change-content="psych" class="small-text-justify hide">Learning psychology
      taught me about the importances
    </p>
    <p id="content" data-change-content="code" class="small-text-justify hide">Learning to code started
      as a new year resolution that quickly turn into a passion. Being mostly selft
      taught, I thrived on the
    </p>
    <p id="content" data-change-content="art" class="small-text-justify hide">Graduated from
      ARTCalifornia State University Northridge with a Bachlors in Psychology and a
      Minor in Arts. Durning my time in college centred my studies around
      Psychology, Code, and Art.
    </p>

  </div>

  {{-- <div class="resume-panel">
    <h2 class="text-center">Resume <small>Click To View Full Screen</small></h2>
    <p>It has an easy to override visual style, and is appropriately subdued.</p>
  </div> --}}


</div>
@endsection
@section('scripts')
  <script type="text/javascript">
  $('.psych').click( function(){
    $('.psych>h3').addClass('text-primary');
    $('.img-panel').addClass('img-panel__general');
    $("[data-change-content = 'psych']").removeClass('hide');
    $("[data-change-content = 'default']").addClass('hide');
    $("[data-change-content = 'code']").addClass('hide');
    $("[data-change-content = 'art']").addClass('hide');
  });
  $('.art').click( function(){
    $('.art>h3').addClass('text-primary');
    $('.img-panel').addClass('img-panel__art');
    $('.img-panel').removeClass('img-panel__general');
    $("[data-change-content = 'art']").removeClass('hide');
    $("[data-change-content = 'default']").addClass('hide');
    $("[data-change-content = 'psych']").addClass('hide');
    $("[data-change-content = 'code']").addClass('hide');
  });
  $('.code').click( function(){
    $('.code>h3').addClass('text-primary');
    $("[data-change-content = 'code']").removeClass('hide');
    $("[data-change-content = 'default']").addClass('hide');
    $("[data-change-content = 'psych']").addClass('hide');
    $("[data-change-content = 'art']").addClass('hide');
  });


  </script>
@endsection
