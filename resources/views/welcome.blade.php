@extends('layouts.master')

@section('title', 'DeltaV Industry')

@section('description')

@section('content')
<div class="align-center main small-12 large-12 welcome--container">
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
</div>
<div class="row">
  <div class="small-6 small-centered text-center columns">
      <a aria-label="Enter website" type="button" data-btn="enter" href="{{ url('/about') }}" href="#" class="hollow button">Enter</a>
  </div>
</div>
@endsection

@section('scripts')
<script >

$( document ).ready(function() {

  var enterWebsite = function() {
    window.location.replace("/about");
  };

  // setInterval(enterWebsite, 9000);
});
</script>
@endsection
