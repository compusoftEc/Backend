const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'dist/js')
    .css('resources/css/app.css', 'dist/css')
    .sass('resources/sass/app.scss', 'dist/css');