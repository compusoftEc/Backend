const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'dist/js')
    .css('resources/css/app.css', 'dist/css')