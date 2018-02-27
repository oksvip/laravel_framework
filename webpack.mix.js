var mix = require('laravel-mix');

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

// ADMIN RESOURCE
mix.styles([
    'resources/assets/admin/adminlte/bower/bootstrap/dist/css/bootstrap.min.css',
    'resources/assets/admin/adminlte/bower/font-awesome/css/font-awesome.min.css',
    'resources/assets/admin/adminlte/bower/Ionicons/css/ionicons.min.css',
    'resources/assets/admin/adminlte/dist/css/AdminLTE.min.css',
    'resources/assets/admin/adminlte/dist/css/skins/_all-skins.css',
    'resources/assets/admin/adminlte/plugins/iCheck/square/blue.css',
    'resources/assets/404/css/404.css'
], 'public/static/admin/css/app.css');

mix.sass('resources/assets/admin/sass/app.scss', 'public/static/admin/css');

mix.scripts([
    'resources/assets/admin/adminlte/bower/jquery/dist/jquery.min.js',
    'resources/assets/admin/adminlte/bower/bootstrap/dist/js/bootstrap.min.js',
    'resources/assets/admin/adminlte/dist/js/adminlte.min.js',
    'resources/assets/admin/adminlte/plugins/iCheck/icheck.min.js',
    'resources/assets/404/js/404.js'
], 'public/static/admin/js/app.js');


mix.copy('resources/assets/admin/adminlte/dist/img', 'public/static/admin/images/adminlte');
mix.copy('resources/assets/admin/adminlte/bower/bootstrap/fonts', 'public/static/admin/fonts');
mix.copy('resources/assets/admin/adminlte/bower/font-awesome/fonts', 'public/static/admin/fonts');
mix.copy('resources/assets/admin/adminlte/bower/Ionicons/fonts', 'public/static/admin/fonts');
mix.copy('resources/assets/admin/adminlte/plugins/iCheck/square/blue.png', 'public/static/admin/css');
mix.copy('resources/assets/admin/adminlte/plugins/iCheck/square/blue@2x.png', 'public/static/admin/css');

// HOME RESOURCE
mix.styles([
    'resources/assets/home/css/bootstrap.css',
    'resources/assets/home/css/font-awesome.min.css',
    'resources/assets/home/css/style.css'
], 'public/static/home/css/app.css');

mix.scripts([
    'resources/assets/home/js/boostrap.min.js',
    'resources/assets/home/js/jquery.min.js'
], 'public/static/home/js/app.js');

mix.copy('resources/assets/home/fonts', 'public/static/home/fonts');
mix.copy('resources/assets/home/images', 'public/static/home/images');
