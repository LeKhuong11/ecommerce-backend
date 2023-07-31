const mix = require('laravel-mix');

 mix.js('resources/js/customer/app.js', 'public/js')
 .sass('resources/sass/customer/app.scss', 'public/css');


if (mix.inProduction()) {
    mix.version();
} else {
    // Uses inline source-maps on development
    mix.webpackConfig({
      devtool: 'inline-source-map'
    });
}