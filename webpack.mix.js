const mix = require('laravel-mix');

mix.js('resources/js/main.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/sass/sass.css')
    .styles(['public/sass/sass.css', 'resources/css/*.css'], 'css/app.css');
