<?php
namespace Jutuike;

use Jutuike\Helper;

class PubMeituan
{

    /** 
     * @Purpose: 
     * 美团分销联盟外卖/闪购/吃喝玩乐/周末特价活动接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function act($data)
    {
        return  Helper::get('/PubMeituan/act', $data);
    }

    /** 
     * @Purpose: 
     * 美团分销联盟订单接口(外卖/闪购/吃喝玩乐/酒店)
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function orders($data)
    {
        return  Helper::get('/PubMeituan/orders', $data);
    }

}
