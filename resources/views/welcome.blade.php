@extends('layouts.master')

@section('title', 'DeltaV Industry')

@section('description')

@section('content')
<div class="align-center">
       <div class="colums  inside">
            <img alt="Silhouette of a phoneix/bird" class="float-center small-offset-4 small-3 medium-3 large-2 large-offset-5 main-logo" src="img/deltav_white.svg">
        </div>

        <div class="row">
          <h1 class="text-center text-white">Valerie Sharp</h1>
          @can('edit_work')
            <h1><a href="#">Need to make some update?</a></h1>
          @endcan

          @can('manage_user')
            <h1><a href="#">Edit these users</a></h1>
          @endcan

        </div>

        <div class="row">
               <h3 class="text-white text-center">Frontend Devloper / UX Designer</h3>
        </div>

        <div class="row">
               <div class="large-2 medium-centered medium-2 small-5 small-centered large-centered columns ">
               <a aria-label="Enter website" type="button" data-btn="enter" href="{{ url('/about') }}" class="hollow button">ENTER</a>
               </div>
        </div>
        {{-- <div class="row align-center text-center"> --}}
          <!-- <div class="col-lg-12 col-mg-12 col-sm-12 container sub-icons"> -->
          {{-- <a class="direct-contact" href="mailto:valerie.n.sharp93@gmail.com">Contact Me</a> --}}
          {{-- <a class="direct-contact" href=""></a> --}}
        {{-- </div> --}}

</div>
<div class="  text-center bottom-nav-bar">
  {{-- <a class="large-6 medium-6 small-6" href=""><h4>Ux/Ui Developer</h4></a> --}}
  {{-- <a class="large-6 medium-6 small-6 " href=""><h4>Front End Devloper</h4></a>                 --}}
</div>
@endsection
