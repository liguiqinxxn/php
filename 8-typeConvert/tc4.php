<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/27
 * Time: 18:14
 */
$str = '2017miaov';

var_dump($str);  //'2017miaov'

$int1 = (int)$str;

var_dump($int1); //2017

$int2 = intval($str);

var_dump($int2); //2017

var_dump(settype($str,"int")); //true

var_dump($str); //2017