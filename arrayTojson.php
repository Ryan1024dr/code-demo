<?php
/*
输入一个关联数组，转化成json数组
实现思路：将键值连起来 加上特定的符号 重新连接成一个json格式的字符串 注意一次循环后结尾的逗号处理
*/
$arr = ['1'=>'一','2'=>'二','3'=>'三','4'=>'四','5'=>'五'];

function arr_to_json($arr)
{
    $str = '';
    if(empty($arr)) return false;
    foreach($arr as $k=>$v)
    {
        $str = $str.$k.':'.$v.',';
    }
    // echo $str;
    $count = strlen($str);
    //截取最后一个‘，’
    $str  = substr($str,0,$count-1);
    // echo $str;
    $str = '['.$str.']';
    echo $str;
}

arr_to_json($arr);