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

mix.styles([
    'resources/assets/admin/adminlte/bower/bootstrap/dist/css/bootstrap.min.css',
    'resources/assets/admin/adminlte/bower/font-awesome/css/font-awesome.min.css',
    'resources/assets/admin/adminlte/bower/Ionicons/css/ionicons.min.css',
    'resources/assets/admin/adminlte/dist/css/AdminLTE.min.css',
    'resources/assets/admin/adminlte/dist/css/skins/_all-skins.css',
    'resources/assets/admin/adminlte/plugins/iCheck/square/blue.css'
], 'public/static/admin/css/app.css');

mix.sass('resources/assets/admin/sass/app.scss', 'public/static/admin/css');

mix.scripts([
    'resources/assets/admin/adminlte/bower/jquery/dist/jquery.min.js',
    'resources/assets/admin/adminlte/bower/bootstrap/dist/js/bootstrap.min.js',
    'resources/assets/admin/adminlte/dist/js/adminlte.min.js',
    'resources/assets/admin/adminlte/plugins/iCheck/icheck.min.js'
], 'public/static/admin/js/app.js');


mix.copy('resources/assets/admin/adminlte/dist/img', 'public/static/admin/images/adminlte');
mix.copy('resources/assets/admin/adminlte/bower/bootstrap/fonts', 'public/static/admin/fonts');
mix.copy('resources/assets/admin/adminlte/bower/font-awesome/fonts', 'public/static/admin/fonts');
mix.copy('resources/assets/admin/adminlte/bower/Ionicons/fonts', 'public/static/admin/fonts');

// mix.js('resources/assets/admin/js/app.js', 'public/static/admin/js')
//     .sass('resources/assets/admin/sass/app.scss', 'public/static/admin/css');
