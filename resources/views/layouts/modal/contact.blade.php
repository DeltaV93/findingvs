<h1 id="exampleModalHeader11">Hey, this is Valerie leave your message after the beep.</h1>
<div class="sound row column-center">
  <div class='sound-wave'>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
    <div class='sound-wave-bar'></div>
  </div>
</div>
<ul>
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
</ul>
@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif
  {!! Form::open(array('route' => 'contact_store', 'method' => 'POST', 'class' => 'form contact-form')) !!}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
      <div class="medium-6 columns">
        <label for="name">Name
          <input id="name" name="name" minlength="2" required type="text" placeholder="Your Name">
        </label>
      </div>
      <div class="medium-6 columns">
        <label for="email">Email
          <input id="email" name="email" required type="email" placeholder="Email">
        </label>
      </div>
    </div>
    <div class="medium-12 columns">
        <label for="message">
         Message
            <textarea id="message" name="message" type="text" minlength="5" col="10" required placeholder="Please enter your message here"></textarea>
      </label>
    </div>
    <button class="right" type="submit">Send</button>

  <button class="close-button" data-close aria-label="Close Modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
  {!! Form::close() !!}
  <button data-close aria-label="Close Modal" type="button" class="right clear" style="display:none">Close</button>
