<?php

namespace App\Helpers;

class AdminStatus
{
    const LOGIN_SUCCESS_CODE = 100000;
    const LOGIN_SUCCESS_MESSAGE = '登录成功！';

    const LOGIN_FAILURE_CODE = 100001;
    const LOGIN_FAILURE_MESSAGE = '登录失败！';

    const NO_LOGIN_CODE = 100002;
    const NO_LOGIN_MESSAGE = '您暂未登录！';

    const LOGOUT_FAILURE_CODE = 100003;
    const LOGOUT_FAILURE_MESSAGE = '注销失败！';

    const LOGOUT_SUCCESS_CODE = 100004;
    const LOGOUT_SUCCESS_MESSAGE = '注销成功！';

    const ALREADY_LOGIN_CODE = 100005;
    const ALREADY_LOGIN_MESSAGE = '您已登录，无需再次操作！';
}