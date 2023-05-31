<?php
namespace Jutuike;

use Jutuike\Helper;

class Dyfx
{

    /** 
     * @Purpose: 
     * 抖音精选联盟商品分类API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function product_category($data=[])
    {
        return  Helper::ds('/dyfx/product_category', $data);
    }

    /** 
     * @Purpose: 
     * 抖音精选联盟商品搜索API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function product_search($data=[])
    {
        return  Helper::ds('/dyfx/product_search', $data);
    }

    
    /** 
     * @Purpose: 
     * 抖音精选联盟商品转链API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function product_privilege($data=[])
    {
        return  Helper::ds('/dyfx/product_privilege', $data);
    }

        
    /** 
     * @Purpose: 
     * 抖音精选联盟口令解析API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function shareCommandParse($data=[])
    {
        return  Helper::ds('/dyfx/shareCommandParse', $data);
    }

    /** 
     * @Purpose: 
     * 抖音精选联盟订单查询接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function orders($data=[])
    {
        return  Helper::get('/douyin/orders', $data);
    }
}
