let mix = require('laravel-mix');

mix.copy('resources/assets/js/jquery-3.2.1.slim.min.js', 'public/assets/js/jquery-3.2.1.slim.min.js')
mix.copy('resources/assets/css/bootstrap.min.css.map', 'public/assets/css/bootstrap.min.css.map')
mix.copy('resources/assets/js/bootstrap.min.js.map', 'public/assets/js/bootstrap.min.js.map')
    .copy('resources/assets/images/', 'public/assets/images/');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/floating-labels.css',
    'resources/assets/css/backend.css'
], 'public/assets/css/app.css');

mix.scripts([
   'resources/assets/js/popper.min.js',
   'resources/assets/js/bootstrap.min.js',
   'resources/assets/js/javascript.js'
], 'public/assets/js/app.js');
