<?php
namespace Jutuike;

use Jutuike\Helper;

class Elm
{

    /** 
     * @Purpose: 
     * 饿了么外卖/生鲜红包活动转链接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function act($data=[])
    {
        return  Helper::get('/Ele/act', $data);
    }

    /** 
     * @Purpose: 
     * 饿了么单店推广店铺列表
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function store_list($data=[])
    {
        return  Helper::get('/ele/store_list', $data);
    }

    /** 
     * @Purpose: 
     * 饿了么单店推广单店铺查询
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function store_promotion($data=[])
    {
        return Helper::get('/ele/store_promotion', $data);
    }
}
