<?php

namespace Jutuike;

use Jutuike\Helper;

class Ds
{

    /** 
     * @Purpose: 
     * 电商聚合分类API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function goods_category($data = [])
    {
        return  Helper::ds('/union/goods_category', $data);
    }
    /** 
     * @Purpose: 
     * 电商聚合商品列表API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function query_goods($data = [])
    {
        return  Helper::ds('/union/query_goods', $data);
    }
    /** 
     * @Purpose: 
     * 电商聚合搜索商品API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function search($data = [])
    {
        return  Helper::ds('/union/search', $data);
    }
    /** 
     * @Purpose: 
     * 电商聚合转链API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function convert($data = [])
    {
        return  Helper::ds('/union/convert', $data);
    }

    /** 
     * @Purpose: 
     * 电商聚合精选商品API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function jingxuan($data = [])
    {
        return  Helper::ds('/union/jingxuan', $data);
    }

    /** 
     * @Purpose: 
     * 电商聚合平台名称接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function platform($data = [])
    {
        return  Helper::ds('/union/platform', $data);
    }

    /** 
     * @Purpose: 
     * 电商聚合商品推荐API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function recommend($data = [])
    {
        return  Helper::ds('/union/recommend', $data);
    }

    /** 
     * @Purpose: 
     * 电商聚合首页检测粘贴板API接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function wn_convert($data = [])
    {
        return  Helper::ds('/union/wn_convert', $data);
    }
}
