<?php

namespace App\Helpers;

class Helpers
{
    /**
     * curl请求接口
     * @param $url
     * @param string $request_type
     * @param string $data_type
     * @return mixed|null|\SimpleXMLElement
     */
    public static function curl($url, $request_type = 'get', $data_type = 'json')
    {
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
        curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, false );
        if ('post' == $request_type) {
            curl_setopt ( $ch, CURLOPT_POST, 1 );
        }
        $file_contents = curl_exec ( $ch );
        curl_close ( $ch );

        $data = null;
        if ( $file_contents ) {
            if ( 'xml' == $data_type ) {
                $data = simplexml_load_string($file_contents);
                $data = json_decode( $data, true );
            } elseif ( 'json' == $data_type ) {
                $data = json_decode( $file_contents, true );
            }
        }

        return $data;
    }

    /**
     * 返回API接口数据
     * @param $code
     * @param $message
     * @param $data
     */
    public static function apiResponse($code, $message, $data)
    {
        $response_data = [
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($response_data, 200);
    }

    /**
     * Form全局错误信息
     */
    public static function showErrorMessageHtml()
    {
        return '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> :message</label>';
    }
}