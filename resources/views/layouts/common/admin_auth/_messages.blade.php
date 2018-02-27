@if (Session::has('info'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="text-center">{{ Session::get('info') }} （状态码：{{ Session::get('status-code') }}）</span>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="text-center">{{ Session::get('success') }} （状态码：{{ Session::get('status-code') }}）</span>
    </div>
@endif

@if (Session::has('danger'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('danger') }} （状态码：{{ Session::get('status-code') }}）
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('warning') }} （状态码：{{ Session::get('status-code') }}）
    </div>
@endif