<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta name="description" content="@yield('description')">
<style type="text/css">
.container {
  border:solid 1px black;
  padding: 5%;
}
.card--inner {
  border: solid 1px black;
  min-height: 400px;
  padding: 2%;
}
</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="card camera box hidden-lg hidden-md hidden-md hidden-sm hidden-xs col-md-4 col-lg-6 ">
        <div class="card--inner ">
          <h2>Camera</h2>
          <div class="card--form">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
            </form>          
          </div>
          <button type="button" class="btn btn-primary">button</button>
        </div>
      </div>
      <div class="card col-md-4 col-lg-6 ">
        <div class="card--inner">
          <h2>Customer Information</h2>
          <button type="button" class="btn btn-primary">button</button>
        </div>
      </div>
      <div class="card col-md-4 col-lg-6 ">
        <div class="card--inner">
          <h2>vehicle rates</h2>
          <button type="button" class="btn btn-primary">button</button>
        </div>
      </div>
    </div>
  </div>
  {{-- {!! HTML::script('js/modernizr-custom.js') !!} --}}
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  <script>

/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-devicemotion_deviceorientation-setclasses !*/
!function(e,n,o){function s(e,n){return typeof e===n}function a(){var e,n,o,a,i,l,r;for(var c in f)if(f.hasOwnProperty(c)){if(e=[],n=f[c],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(o=0;o<n.options.aliases.length;o++)e.push(n.options.aliases[o].toLowerCase());for(a=s(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)l=e[i],r=l.split("."),1===r.length?Modernizr[r[0]]=a:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=a),t.push((a?"":"no-")+r.join("-"))}}function i(e){var n=r.className,o=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var s=new RegExp("(^|\\s)"+o+"no-js(\\s|$)");n=n.replace(s,"$1"+o+"js$2")}Modernizr._config.enableClasses&&(n+=" "+o+e.join(" "+o),c?r.className.baseVal=n:r.className=n)}var t=[],f=[],l={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var o=this;setTimeout(function(){n(o[e])},0)},addTest:function(e,n,o){f.push({name:e,fn:n,options:o})},addAsyncTest:function(e){f.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr,Modernizr.addTest("devicemotion","DeviceMotionEvent"in e),Modernizr.addTest("deviceorientation","DeviceOrientationEvent"in e);var r=n.documentElement,c="svg"===r.nodeName.toLowerCase();a(),i(t),delete l.addTest,delete l.addAsyncTest;for(var d=0;d<Modernizr._q.length;d++)Modernizr._q[d]();e.Modernizr=Modernizr}(window,document);

$( document ).ready(function() {
    if (Modernizr.devicemotion.deviceorientation) {
      console.log('hey');
      $('.camera').removeClass('hidden-lg hidden-md hidden-md hidden-sm hidden-xs');
    }
  });    
  </script>
</body>
</html>