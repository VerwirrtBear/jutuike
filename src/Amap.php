<?php
namespace Jutuike;

use Jutuike\Helper;

class Amap
{

    /** 
     * @Purpose: 
     * 高德打车CPS+CPA接口
     * @param array  $data 参考聚推客 
     * @return array []
     * 
     */
    public static function act($data=[])
    {
        return  Helper::get('/amap/act', $data);
    }


}
