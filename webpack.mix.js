const mix = require('laravel-mix');

 mix.js('resources/js/customer/app.js', 'public/js')
 .sass('resources/sass/customer/app.scss', 'public/css');
