<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends AuthBaseController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Login action.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ], [
            'email.required' => '邮箱地址必填！',
            'email.email' => '邮箱地址不正确！',
            'email.exists' => '此邮箱地址未注册！',
            'password.required' => '密码必填！',
        ]);

        if (! Auth::attempt($request->except(['_token']))) {
            return Redirect::back()
                ->withInput()
                ->with('danger', '登录失败！');
        }
        return Redirect::route('admin.home')
            ->with('success', '登录成功！');
    }
}
