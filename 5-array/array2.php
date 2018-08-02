<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/26
 * Time: 11:22
 */
$newsList = array('news1','news2','news3');
$newsList2 = ['news1','news2','news3'];
//var_dump($newsList);
//echo '<br>';
//var_dump($newsList2);

$newsList3 = array(
    10 => 'news1',
    12 => 'news2',
    'string' => 'news3',
    'int' => 1,
    'float' => 1.5,
    'bool' => true,
    'array' =>array(),
);
//var_dump($newsList3);
//echo '<br>';
$newsList3[] = 'news4';
$newsList3[-1] = 'news5';
$newsList3[-1] = 'news5-1';
$newsList3[13] = 'news4-1';
unset($newsList3[-1]);
echo $newsList3[13];
//print_r($newsList3);