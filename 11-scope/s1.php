<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/28
 * Time: 11:36
 */
$a = 1;

echo $a;
echo '<br>';

function test(){
    $a = 2;
    echo $a;
    echo '<br>';

    /*global $a,$b;
    $b = 2;
    echo $a.','.$b;
    echo '<br>';*/

    /*$b = 2;
    echo $GLOBALS['a'].','.$b;
    echo '<br>';*/
   /* print_r($GLOBALS);
    echo '<br>';*/
}

test();
echo $a;
echo '<br>';

