<?php

namespace App\Handlers;

use Illuminate\Support\Facades\Redis;

class RedisHandler
{
    /**
     * 设置redis值
     *
     * @param  int  $key
     * @param  int  $value
     * @return Response
     */
    public function set($key, $value)
    {
        return Redis::set($key, $value);
    }

    /**
     * 获取指定redis值
     *
     * @param  int  $key
     * @return Response
     */
    public function get($key)
    {
        return Redis::get($key);
    }
}