<?php
namespace Jutuike;

use Jutuike\Helper;

class Stmovie
{

    /** 
     * @Purpose: 
     * 电影票小程序/插件订单接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function orders($data=[])
    {
        return  Helper::get('/stmovie/orders', $data);
    }




}
