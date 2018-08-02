<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/28
 * Time: 11:51
 */
function test(){
    static $count = 0;
    $count++;

    echo $count.' ';

    if ($count<10){
        test();
    }
}

test();