<?php
/*
php实现将数字转为中文，如12345转一二三四五
实现思路 数组下标匹配需要的字符
*/
function ChangeCHN($str)
{

    $arr1=array();
    $arr = ['0'=>'零','1'=>'一','2'=>'二','3'=>'三','4'=>'四','5'=>'五','6'=>'六','7'=>'七','8'=>'八','9'=>'九'];
    //将字符串划分为数组
    $str = str_split($str);
    //进行字符匹配
    for($i = 0;$i<count($str);$i++)
    {
        $arr1[$i] = $arr[$str[$i]];
    }
    //将数组转换成字符串
    $str = implode($arr1);
    return $str;
}
$str = '12345';
echo ChangeCHN($str);