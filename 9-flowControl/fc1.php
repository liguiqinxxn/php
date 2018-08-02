<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/27
 * Time: 19:05
 */
$status = 1;
if ($status == 0){
    echo '请先登录';
}elseif($status == 2){
    echo '已被禁言';
}else{
    echo '欢迎登录';
}