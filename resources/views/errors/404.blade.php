<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
  <title>404</title>

  <link type="text/css" rel="stylesheet" href="{{ asset('static/admin/css/app.css') }}" />

  <!--[if IE 6]>
  <script src="{{ asset('static/admin/js/app.js') }}"></script>
  <script>DD_belatedPNG.fix('*')</script>
  <![endif]-->

</head>
<body>

<div id="wrap">
  <div>
    <img src="{{ asset('static/admin/images/404/404.png') }}" alt="404" />
  </div>
  <div id="text">
    <strong>
      <span></span>
      <a href="{{ config('app.url') }}" target="_self">返回首页</a>
      <a href="javascript:history.back()">返回上一页</a>
    </strong>
  </div>
</div>

<div class="animate below"></div>
<div class="animate above"></div>
<div style="text-align:center;"></div>
</body>
</html>