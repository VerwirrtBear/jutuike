<?php

namespace Jutuike;

use Jutuike\Helper;

class Jd
{

    /** 
     * @Purpose: 
     * 京东单页活动接口【火爆】
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function page_activity($data = [])
    {
        return  Helper::get('/jd/page_activity', $data);
    }

    /** 
     * @Purpose: 
     * 超级福利商品列表接口【双份佣金】
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function subsidy_goods($data = [])
    {
        return  Helper::get('/jd/subsidy_goods', $data);
    }
    /** 
     * @Purpose: 
     * 京东商品/活动转链API
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function get_goods_link($data = [])
    {
        return  Helper::get('/jd/get_goods_link', $data);
    }
    /** 
     * @Purpose: 
     * 京东商品分类接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function get_super_category($data = [])
    {
        return  Helper::get('/jd/get_super_category', $data);
    }
    /** 
     * @Purpose: 
     * 京东订单查询接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function orders($data = [])
    {
        return  Helper::get('/jd/orders', $data);
    }
}
