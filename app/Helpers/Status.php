<?php

namespace App\Helpers;

class Status
{
    const SUCCESS_CODE = 200;
    const SUCCESS_MESSAGE = '成功';

    const FAIL_CODE = 400;
    const FAIL_MESSAGE = '失败';

    const AUTH_ERROR_CODE = 401;
    const AUTH_ERROR_MESSAGE = '认证失败';

    const PARAM_ERROR_CODE = 403;
    const PARAM_ERROR_MESSAGE = '参数错误';

    const RESOURCE_NOT_EXISTS_ERROR_CODE = 404;
    const RESOURCE_NOT_EXISTS_ERROR_MESSAGE = '资源不存在';

    const VERIFY_ERROR_CODE = 405;
    const VERIFY_ERROR_MESSAGE = '验证失败';

    const REQUEST_TIMEOUT_ERROR_CODE = 408;
    const REQUEST_TIMEOUT_ERROR_MESSAGE = '请求超时';

    const SERVER_ERROR_CODE = 500;
    const SERVER_ERROR_MESSAGE = '服务器错误';
}