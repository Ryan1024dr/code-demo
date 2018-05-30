<?php
function bigDataAdd($a,$b){  
    $m = strlen($a);  
    $n = strlen($b);  
    $num = $m>$n?$m:$n;//取最长数进行循环相加和进位  
    $result = '';//结果  
    $flag = 0; //进位标志  
    while($num--){  
        $t1 = 0;//用来存储当前位加数  
        $t2 = 0;//用来存储当前位被加数  
        if($m>0){  
            $t1 = $a[--$m];  
        }  
        if($n>0){  
            $t2 = $b[--$n];  
        }  
        $t = $t1+$t2+$flag;//当前位加法运算考虑上一轮的进位标志  
        $flag = intval($t/10);//本轮是否进位  
        $result = ($t%10).$result;//向高位添加结果  
    }  
    //最高位加完发现还有进位标志，需要再向最高位+1  
    if ($flag) {  
        $result = $flag.$result;  
    }  
    return $result;  
}  
  
$a = '999999999999999999999999999999999999';  
$b = '1';  
$result = bigDataAdd($a,$b);  
echo $result;  