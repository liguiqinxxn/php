<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/27
 * Time: 19:26
 */
//判断变量是否是数组，如果是数组则遍历数组输出
$arr = [1,2,3,4];
//$arr = 1;
if (is_array($arr)){
    foreach ($arr as $key => $value){
        echo $key.'=>'.$value.'<br>';
    };
}
