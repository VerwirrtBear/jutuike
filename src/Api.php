<?php

namespace Jutuike;

use Jutuike\Helper;

class Api
{

    /** 
     * @Purpose: 
     * 聚推客联盟活动列表
     * @param  string $page 	页码 默认 1 false
     * @param  string $pageSize 每页显示多少 默认 20 最大 100 false 
     * @param  string $xcx_spread 是否支持微信小程序 0-全部 1-支持小程序 false
     * @param  string $alipay_xcx_spread 是否支持支付宝小程序 0-全部 1-支持小程序 false
     * 
     * @return array {
     *      int  act_id 活动ID,
     *      string  act_name 活动名称,
     *      string  desc 活动描述,
     *      string  img 活动样例,
     *      string  icon icon图标,
     *      string  poster 海报(部分活动没有)
     * }
     * 
     */
    public static function actList($page = 1, $pageSize = 20, $xcx_spread = 0, $alipay_xcx_spread = 0)
    {
        $url = '/union/act_list';
        return  Helper::get($url, []);
    }

    /** 
     * @Purpose: 
     * 聚推客联盟统一订单数据接口
     * @param  string $start_time 	开始时间  false
     * @param  string $end_time     结束时间   false 
     * @param  int $query_type      1： 按支付时间 2：按更新时间 3：创建时间 ，默认：3
     * @param  string $sid          自定义参数跟单
     * @param  string $brand_id     品牌id 1 美团 2 淘宝/饿了么 3 拼多多 4 京东 5 肯德基 6 电影 7 麦当劳 8 话费充值 9 百果园 10 奈雪的茶 11 瑞幸咖啡 12 星巴克 13 喜茶 14 唯品会 15 滴滴/花小猪 16 汉堡王 17 高德打车 18 电费充值 19 会员充值 20 特价快递 21 联联周边游 22 抖音联盟 23 必胜客 24 旅划算 25 大牌餐券 26 千千惠生活 27 流量卡 28 同程出行 29 华莱士 30 T3出行 31 景点门票
     * @param  string $status       订单统一状态，0：未付款 1：已付款 2：待结算 3：已结算 4：无效订单
     * @param  string $order_sn     订单号
     * @param  string $relation_flag_name     第三方渠道标识
     * @param  string $page     页码 默认 1
     * @param  string $pageSize     每页显示多少 默认 20 最大 100
     * 
     * @return array []
     * 
     */
    public static function orders($start_time = "", $end_time = "", $query_type = 1, $sid = "", $brand_id = 1, $status = 1, $order_sn = "", $page = 1, $pageSize = 20, $relation_flag_name = "")
    {
        $url = '/union/orders';
        return  Helper::get($url, []);
    }
    /** 
     * @Purpose: 
     * 聚推客联盟统一活动转链接口
     * @param  string $sid 	自定义参数跟单  true
     * @param  int $act_id     活动ID，聚推客联盟活动列表接口获取 actList  true 
     * 
     * @return array []
     * 
     */

    public static function act($sid = "", $act_id = "")
    {
        $url ='/union/act';
        return  Helper::get($url, []);
    }
}