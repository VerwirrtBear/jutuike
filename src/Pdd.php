<?php
namespace Jutuike;

use Jutuike\Helper;

class Pdd
{

    /** 
     * @Purpose: 
     * 多多频道推广接口/话费充/限时秒杀/百亿补贴/领券中心
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function act($data=[])
    {
        return  Helper::get('/Pdd/act', $data);
    }

    /** 
     * @Purpose: 
     * 多多频道推广订单查询接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function orders($data=[])
    {
        return  Helper::get('/Pdd/orders', $data);
    }


}
