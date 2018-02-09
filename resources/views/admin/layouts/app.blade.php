<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title', '首页') - {{ config('app.name') }}后台管理</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('static/admin/css/app.css') }}">

    <!-- IE8 support of HTML5 elements and media queries -->
    @include('admin.layouts._support')

</head>
<!--
BODY TAG OPTIONS:
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    @include('admin.layouts._header')
    @include('admin.layouts._messages')

    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layouts._sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')

    <!-- Main Footer -->
    @include('admin.layouts._footer')

    <!-- Control Sidebar -->
    @include('admin.layouts._control')
</div>
<!-- ./wrapper -->

<!-- JS -->
<script src="{{ asset('static/admin/js/app.js') }}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>