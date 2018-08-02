<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/27
 * Time: 19:21
 */
$arr = [0,1,2];
$status = 1;
switch ($status){
    case $arr[0]:
        echo '请先登录';
        break;
    case 1:
        echo '欢迎登录';
        break;
    case 2:
        echo '已禁言';
        break;
}