<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\AdminStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends AuthBaseController
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['index', 'register']
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * 注册动作
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:20|alpha_num',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:16|alpha_dash|confirmed',
            'password_confirmation' => 'required',
            'agree_term' => 'required',
        ], [
            'name.*' => '用户名必填，长度在2-20个字母和数字之间',
            'email.required' => '邮件地址必填！',
            'email.email' => '邮件地址格式错误！',
            'email.unique' => '邮件地址已被注册！',
            'password.required' => '密码必填，长度在6-16个字母数字下划线破折号！',
            'password.min' => '密码必填，长度在6-16个字母数字下划线破折号！',
            'password.max' => '密码必填，长度在6-16个字母数字下划线破折号！',
            'password.alpha_dash' => '密码必填，长度在6-16个字母数字下划线破折号！',
            'password.confirmed' => '密码和确认密码不一致！',
            'password_confirmation.required' => '确认密码必填！',
            'agree_term.required' => '请勾选同意条款！',
        ]);

        $request->merge(['password' => bcrypt($request->password)]);

        $user = User::create($request->except('_token'));

        if (!$user) {
            return Redirect::back(302)
                ->withInput()
                ->with('status-code', AdminStatus::REGISTER_FAILURE_CODE)
                ->with('danger', AdminStatus::REGISTER_FAILURE_MESSAGE);
        }

        Auth::login($user);

        return Redirect::route('admin.index')
            ->with('status-code', AdminStatus::REGISTER_SUCCESS_CODE)
            ->with('success', AdminStatus::REGISTER_SUCCESS_MESSAGE);
    }
}
