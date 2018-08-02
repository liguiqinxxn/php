<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/26
 * Time: 16:08
 */
$newsList = array(
    array(
        'time' => '2017-05-07',
        'title' => '妙味新闻news1',
        'link' => 'http://miaov.com',
    ),
    array(
        'time' => '2017-06-07',
        'title' => '妙味新闻news2',
        'link' => 'http://miaov.com',
    ),
    array(
        'time' => '2017-04-07',
        'title' => '妙味新闻news3',
        'link' => 'http://miaov.com',
    ),
    array(
        'time' => '2017-05-11',
        'title' => '妙味新闻news1',
        'link' => 'http://miaov.com',
    ),
    array(
        'time' => '2017-05-25',
        'title' => '妙味新闻news2',
        'link' => 'http://miaov.com',
    ),
    array(
        'time' => '2017-05-16',
        'title' => '妙味新闻news3',
        'link' => 'http://miaov.com',
    ),
    array(
        'time' => '2017-12-07',
        'title' => '妙味新闻news1',
        'link' => 'http://miaov.com',
    ),
    array(
        'time' => '2017-04-08',
        'title' => '妙味新闻news1',
        'link' => 'http://miaov.com',
    ),
    array(
        'time' => '2017-05-07',
        'title' => '妙味新闻news2',
        'link' => 'http://miaov.com',
    ),
    array(
        'time' => '2017-05-07',
        'title' => '妙味新闻news3',
        'link' => 'http://miaov.com',
    ),
);

foreach ($newsList as $key => $news){
    echo $news['time']."<a href='".$news['link']."'>".$news['title']."<a><br><br>";
}