<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title', '首页') - {{ config('app.name') }}后台管理</title>

    <!-- CSS -->
    @include('layouts.common.admin_auth._css')

    <!-- IE8 support of HTML5 elements and media queries -->
    @include('layouts.common.admin_auth._support')

</head>
<body class="hold-transition register-page">

<!-- Body -->
@yield('content')

<!-- JS -->
@include('layouts.common.admin_auth._js')
@section('js')@show

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>