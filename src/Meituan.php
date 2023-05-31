<?php
namespace Jutuike;

use Jutuike\Helper;

class Meituan
{

    /** 
     * @Purpose: 
     * 美团联盟外卖/酒店/券包活动转链接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function act($data=[])
    {
        return  Helper::get('/Meituan/act', $data);
    }

    /** 
     * @Purpose: 
     * 美团联盟订单接口（按订单号查询）
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function order_info($data=[])
    {
        return  Helper::get('/Meituan/order_info', $data);
    }

    /** 
     * @Purpose: 
     * 美团联盟订单接口（按时间查询）
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function orders($data=[])
    {
        return  Helper::get('/Meituan/orders', $data);
    }

        /** 
     * @Purpose: 
     * 优选商品查询API【2022年1月17日暂停数据访问】
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function youxuan_goods($data=[])
    {
        return  Helper::get('/meituan/youxuan_goods', $data);
    }
    /** 
     * @Purpose: 
     * 美团券包接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function coupon_ad_list($data=[])
    {
        return  Helper::get('/Meituan/coupon_ad_list', $data);
    }


}
