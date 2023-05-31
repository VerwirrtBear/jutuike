<?php

namespace Jutuike;

class Helper
{
    public static $apikey;
    public static $pubId;
    private static $baseurl = "http://api.jutuike.com";
    private static $baseurl1 = "http://api.act.jutuike.com";


    public static function get($url,$parms)
    {
        $parms["apikey"] = env("jutuike_apikey");
        $q = http_build_query($parms);
        $url .= '?'.$q;
        $url = self::$baseurl .$url;
        //初始化
        $curl = curl_init($url);
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 0);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        $data = json_decode($data,true);
        //显示获得的数据
        // print_r($data);
        return $data;
    }

    public static function ds($url,$parms)
    {
        $parms["apikey"] = env("jutuike_apikey");
        $parms["pub_id"] = env("jutuike_pubId");

        $q = http_build_query($parms);
        $url .= '?'.$q;
        $url = self::$baseurl1 .$url;
        //初始化
        $curl = curl_init($url);
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 0);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        $data = json_decode($data,true);
        //显示获得的数据
        // print_r($data);
        return $data;
    }

    public static function post($url,$data)
    {
        // Open connection
        $url = self::$baseurl .$url;

        $data["apikey"] = self::$apikey; 
        $ch = curl_init();
        // Set the URL
        curl_setopt($ch, CURLOPT_URL, $url);
        // Set the HTTP method to POST
        curl_setopt($ch, CURLOPT_POST, 1);
        // Set the data to be sent with POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // Return the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Execute the request
        $response = curl_exec($ch);
        $response = json_decode($response);

        return $response;
    }
}

