@extends('layouts.auth.app')

@section('content')
    <div class="login-box">
    <div class="login-logo">
        <b>登录Sample</b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">登录后台</p>

        <form action="{{ route('auth.login') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Former::label('联系人', 'email') !!}
                <input type="email" class="form-control" name="email" id="email" placeholder="邮箱">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                {!! $errors->first('email', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>') !!}
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Former::label('密码：', 'password') !!}
                <input type="password" class="form-control" name="password" id="password" placeholder="密码">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                {!! $errors->first('password', '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>') !!}
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" id="remember"> 记住我
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- 快捷登录 -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-google-plus"></i> 微博</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> 微信</a>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Github</a>
        </div>
        <!-- /.social-auth-links -->

        <a href="#">忘记密码</a><br>
        <a href="{{ route('auth.register.index') }}" class="text-center">注册新用户</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection

@section('js')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
@endsection