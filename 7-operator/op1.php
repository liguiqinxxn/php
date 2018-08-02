<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/27
 * Time: 10:54
 */
$a = 5;
//echo $a;
$c = -$a;
$b = 1;
//echo $c;
$c = $a % $b;
//echo $c;

$c = $b != 0 ? $a%$b :$c ;
echo $c;
