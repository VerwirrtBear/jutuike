<?php
namespace Jutuike;

use Jutuike\Helper;

class Didi
{

    /** 
     * @Purpose: 
     * 滴滴打车/加油/货运/花小猪/代驾CPS接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function act($data=[])
    {
        return  Helper::get('/didi/act', $data);
    }

    /** 
     * @Purpose: 
     * 滴滴打车/加油/货运/花小猪/代驾订单接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function orders($data=[])
    {
        return  Helper::get('/didi/orders', $data);
    }

}
