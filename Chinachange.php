<?php
/*
题目要求 输入一个字符串比如 $str = '1,2,3,4,5';
返回中文数字'一二三四五';（explode()）
输入一个字符串$str = '12345';
返回中文数字'一二三四五';(str_split())

实现思路 给出一个模板 下标0对应大写的零 取出字符串的值 然后匹配模板里面的值 重新放到一个数组里面 后 implode() 转换成字符串
*/
    function chinachange($str)
    {
        $arr1 = array();
        $str1 = '';
        //设置一个数组里面存放各种中文数字
        $arr = ['零','一','二','三','四','五','六','七','八','九'];
        //将字符串分割成数组str_split
        $str = str_split($str);
        // echo '<br/>';
        $str = explode(',',$str);
        var_dump($str);
        //利用循环遍历数组 利用数组下标进行数字大小写转换
        for($i = 0;$i<count($str);$i++)
        {
           $arr1[$i] = $arr[$str[$i]];
        }
        $str1 = implode($arr1);
        echo $str1;
    }
    $str = '1,2,3,4,5';
    chinachange($str);