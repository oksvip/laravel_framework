<?php

namespace App\Handlers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class CurlHandler
{
    public function curl()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://api.github.com/user', [
            'auth' => ['user', 'pass']
        ]);
        echo $res->getStatusCode();
        // "200"
        echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
        echo $res->getBody();

        // Send an asynchronous request.
        $request = new Request('GET', 'http://httpbin.org');
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo 'I completed! ' . $response->getBody();
        });
        $promise->wait();
    }
}