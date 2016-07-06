@extends('layouts.master')

@section('title', 'DeltaV Industry')

@section('description')

@section('content')
<div class="">
       <div class="colums row align-center inside">
            <img class="float-center small-3 medium-3 large-2 main-logo" src="img/deltav_white.svg">
        </div>

        <div class="row align-center">
          <h1 class="text-center">Valerie Sharp</h1>
          @can('edit_work')
            <h1><a href="#">Need to make some update?</a></h1>
          @endcan 

          @can('manage_user')
            <h1><a href="#">Edit these users</a></h1>
          @endcan 

        </div>

        <div class="row align-center">
          <h3 class="text-center ">Creater of Delta<span class="deltav-v">V</span> Industry</h3>
        </div>
        <div class="row align-center text-center">
          <!-- <div class="col-lg-12 col-mg-12 col-sm-12 container sub-icons"> -->
          <a class="direct-contact" href="mailto:valerie.n.sharp93@gmail.com"> <img class="small-1 contact-icons email" src="img/email.png">Contact Me</img></a>
          <a class="direct-contact" href=""><img class="small-1 contact-icons resume" src="img/resume.png">View resume</img></a>
        </div>

</div>
<div class="  text-center bottom-nav-bar">
  <a class="large-6 medium-6 small-6" href=""><h4>Ux/Ui Developer</h4></a>
  <a class="large-6 medium-6 small-6 " href=""><h4>Front End Devloper</h4></a>                
</div>
@endsection
