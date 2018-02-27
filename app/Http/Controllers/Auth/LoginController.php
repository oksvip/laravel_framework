<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\AdminStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends AuthBaseController
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['index', 'login']
        ]);
    }

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

        if (! Auth::attempt($request->except(['_token', 'remember']), $request->remember)) {
            return Redirect::back()
                ->withInput()
                ->with('status-code', AdminStatus::LOGIN_FAILURE_CODE)
                ->with('danger', AdminStatus::LOGIN_FAILURE_MESSAGE);
        }

        return Redirect::route('admin.index')
            ->with('status-code', AdminStatus::LOGIN_SUCCESS_CODE)
            ->with('success', AdminStatus::LOGIN_SUCCESS_MESSAGE);
    }

    /**
     * LoginOut.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        if (! Auth::check()) {
            return Redirect::back()
                ->with('status-code', AdminStatus::NO_LOGIN_CODE)
                ->with('danger', AdminStatus::NO_LOGIN_MESSAGE);
        }

        Auth::logout();

        return Redirect::route('auth.login')
            ->with('status-code', AdminStatus::LOGOUT_SUCCESS_CODE)
            ->with('success', AdminStatus::LOGOUT_SUCCESS_MESSAGE);
    }
}
