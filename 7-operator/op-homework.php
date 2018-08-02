<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/27
 * Time: 14:47
 */
$var1 = 1;
$var2 = 3;
$var3 = 7;
$max = $var1 > $var2 ? $var1:$var2;
$max =$max > $var3 ? $max:$var3;
echo $max;