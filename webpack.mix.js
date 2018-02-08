let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/home/js/app.js', 'public/static/home/js')
   .sass('resources/assets/home/sass/app.scss', 'public/static/home/css');

mix.js('resources/assets/admin/js/app.js', 'public/static/admin/js')
    .sass('resources/assets/admin/sass/app.scss', 'public/static/admin/css');
