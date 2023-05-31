<?php
namespace Jutuike;

use Jutuike\Helper;

class Wap
{

    /** 
     * @Purpose: 
     * 会员卡券产品转链接口1（H5）
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function act($data=[])
    {
        return  Helper::get('/wap/act', $data);
    }

    /** 
     * @Purpose: 
     * 会员卡券产品转链接口2（H5）
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function act1($data=[])
    {
        return  Helper::get('/mhcz/act', $data);
    }


}
