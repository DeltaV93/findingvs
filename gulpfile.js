var elixir = require('laravel-elixir');
var browserSync = require('laravel-elixir-browsersync');
require('elixir-imagemin');

/*
 |--------------------------------------------------------------------------
 | FRONT-END DIRECTIONS:
 |--------------------------------------------------------------------------
 |
 | 1. Run 'npm install' to install Gulp && Elixir
 | 2. Create '.bowerrc' in root directory, see (https://gist.github.com/alexhernandez/c3b0d97538f5869d7f86)
 | 3. Create 'elixir.json' in root directory, see (https://gist.github.com/alexhernandez/963c188f23e14e33929e)
 | 4. Run 'bower init' followed by "bower install {package-name} --save"
 | 5. Run any of the following: 'gulp', 'gulp watch', 'gulp --production'
 |
 */

// Get Bower Directory Path (elixir.json)
var components = elixir.config.bowerDir;

// Get Bower Package Paths
var paths = {
   'jquery': components + '/jquery/dist/',
   'foundation': components + '/foundation/',
   'jqueryValidation': components + '/jquery-validation/',
   'fontawesome': components + '/font-awesome/'
};
// Begin Elixir Project
elixir(function(mix) {
   mix.imagemin();

  // Add Styles to project
  mix.copy(paths.foundation + 'css/foundation.css', 'public/css/foundation.css')
     .copy(paths.fontawesome + 'css/font-awesome.css', 'resources/assets/sass/font-awesome.scss');

  // Add Fonts to project
  mix.copy(paths.fontawesome + 'fonts', 'public/fonts');

  // Add Scripts to project
  mix.copy(paths.jquery + 'jquery.js', 'public/js/jquery.js')
     .copy(paths.foundation + 'js/foundation.js', 'resources/js/foundation.min.js')
     .copy(paths.jqueryValidation + 'dist/jquery.validate.min.js', 'resources/js/jquery.validation.js');

  // Merge Styles
  mix.styles([
    'font-awesome.css',
    // 'foundation.css',
  ],'public/css/components.css', 'resources/css');

  // Merge Scripts
  mix.scripts([
    'app.js',
    'jquery.validation.js',
  ],'public/js/app.js');

  // Compile SASS
  mix.sass('valerie.scss')
    .browserSync({ proxy: 'val.dev'});

});
