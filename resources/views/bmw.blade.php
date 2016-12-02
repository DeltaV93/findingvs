<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta name="description" content="@yield('description')">
<style type="text/css">
  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 18px;
  }
  h1, h2, h3, h4, h5,
  h6, p, lable,
  h1, h2 {
    margin-top: 0;
    margin-bottom: 0;
  }
   h1, h2 {
    font-weight: 700;
    margin-bottom: 15px;
   }
   h3, h4, h5, h6 {
    margin-bottom: 10px;
   }
   h1, .h1 {
    font-size: 2.441em;
   }
   h2, .h2 {
    font-size: 1.953em;
   }
  h3, .h3 {
    font-size: 1.563em;
   }
   h4, .h4 {
    font-size: 1.25em;
   }
   h5, .h5 {
    font-size: 22px;
   }
  p {
    font-size: 1em;
   }   
</style>    
</head>
<body>
  <div class="container">
  <h1>H1 - THIS IS A H1</h1>
  <h2>H2 - THIS IS A H2</h2>
  <h3>H3 - This is a h3</h3>
  <h4>H4 - This is a h4</h4>
  <p>p - This is a p-tag</p>
  <label for="">Lable - This is a lable</label>
  </div>
  {{-- {!! HTML::script('js/modernizr-custom.js') !!} --}}
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  </script>
</body>
</html>