<?php
namespace Jutuike;

use Jutuike\Helper;

class Elm
{

    /** 
     * @Purpose: 
     * 聚推客联盟活动列表
     * @param  string $sid 	渠道标识，自定义参数，长度不超过30位，建议在用户领券时调用该接口获取推广链接，切勿提前批量请求创建；
     * @param  int $type 红包类型 3-饿了么浏览店铺得红包活动（不支持h5推广链接，只支持小程序推广） 4-饿了么外卖活动 5-饿了么新零售（只支持小程序推广）
     * 
     * @return array []
     * 
     */
    public static function actList($sid = "", $type = 3)
    {
        $url = '/Ele/act';
        return  Helper::get($url, []);
    }
}
