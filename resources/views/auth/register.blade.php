@extends('layouts.auth.app')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <b>注册Sample</b>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">注册帐号</p>

            <form action="{{ route('auth.register') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Former::text('name', '', old('name'))->placeholder('请输入用户名')->label('用户名')->required() !!}
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    {!! $errors->first('name', App\Helpers\Helpers::showErrorMessageHtml()) !!}
                </div>

                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Former::text('email', '', old('email'))->placeholder('请输入邮箱地址')->label('邮箱')->required() !!}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    {!! $errors->first('email', App\Helpers\Helpers::showErrorMessageHtml()) !!}
                </div>

                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    {!! Former::password('password', '')->placeholder('请输入密码')->label('密码')->required() !!}
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    {!! $errors->first('password', App\Helpers\Helpers::showErrorMessageHtml()) !!}
                </div>

                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    {!! Former::password('password_confirmation', '')->placeholder('请输入确认密码')->label('确认密码')->required() !!}
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    {!! $errors->first('password_confirmation', App\Helpers\Helpers::showErrorMessageHtml()) !!}
                </div>

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label class="{{ $errors->has('agree_term') ? 'has-error' : '' }}">
                                <input type="checkbox" name="agree_term" value="1"> 同意<a href="#">条款</a>
                                {!! $errors->first('agree_term', App\Helpers\Helpers::showErrorMessageHtml()) !!}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">注册</button>
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

            <a href="{{ route('auth.login.index') }}" class="text-center">已有账户去登录</a>
        </div>
        <!-- /.form-box -->
    </div>
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
