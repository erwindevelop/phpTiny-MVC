const mix = require('laravel-mix');

mix.setPublicPath('public/');
mix.js('assets/javascript/main.js', 'public/js')
   .sass('assets/sass/styles.scss', 'public/css')