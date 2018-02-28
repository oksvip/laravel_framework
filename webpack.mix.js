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
    'resources/assets/admin/adminlte/bower/morris.js/morris.css',
    'resources/assets/admin/adminlte/bower/jvectormap/jquery-jvectormap.css',
    'resources/assets/admin/adminlte/bower/datatables.net-bs/css/dataTables.bootstrap.min.css',
    'resources/assets/admin/adminlte/bower/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
    'resources/assets/admin/adminlte/bower/bootstrap-daterangepicker/daterangepicker.css',
    'resources/assets/admin/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    'resources/assets/admin/adminlte/plugins/iCheck/square/blue.css',
    'resources/assets/404/css/404.css'
], 'public/static/admin/css/app.css');

mix.sass('resources/assets/admin/sass/app.scss', 'public/static/admin/css');

mix.scripts([
    'resources/assets/admin/adminlte/bower/jquery/dist/jquery.min.js',
    'resources/assets/admin/adminlte/bower/jquery-ui/jquery-ui.min.js',
    'resources/assets/admin/adminlte/bower/bootstrap/dist/js/bootstrap.min.js',
    'resources/assets/admin/adminlte/plugins/iCheck/icheck.min.js',
    'resources/assets/admin/adminlte/bower/raphael/raphael.min.js',
    'resources/assets/admin/adminlte/bower/morris.js/morris.min.js',
    'resources/assets/admin/adminlte/bower/jquery-sparkline/dist/jquery.sparkline.min.js',
    'resources/assets/admin/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    'resources/assets/admin/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    'resources/assets/admin/adminlte/bower/jquery-knob/dist/jquery.knob.min.js',
    'resources/assets/admin/adminlte/bower/moment/min/moment.min.js',
    'resources/assets/admin/adminlte/bower/bootstrap-daterangepicker/daterangepicker.js',
    'resources/assets/admin/adminlte/bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
    'resources/assets/admin/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    'resources/assets/admin/adminlte/bower/datatables.net/js/jquery.dataTables.min.js',
    'resources/assets/admin/adminlte/bower/atatables.net-bs/js/dataTables.bootstrap.min.js',
    'resources/assets/admin/adminlte/bower/fastclick/lib/fastclick.js',
    'resources/assets/admin/adminlte/bower/jquery-slimscroll/jquery.slimscroll.min.js',
    'resources/assets/admin/adminlte/dist/js/adminlte.min.js',
    'resources/assets/admin/adminlte/dist/js/pages/dashboard.js',
    'resources/assets/admin/adminlte/dist/js/demo.js',
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
