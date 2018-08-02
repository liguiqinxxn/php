<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/26
 * Time: 16:19
 */
$newsList = array(
    2017 => array(
        array(
            'time' => '05-07',
            'title' => '妙味新闻news1',
            'link' => 'http://miaov.com',
        ),
        array(
            'time' => '04-07',
            'title' => '妙味新闻news2',
            'link' => 'http://miaov.com',
        ),
        array(
            'time' => '03-07',
            'title' => '妙味新闻news3',
            'link' => 'http://miaov.com',
        ),
    ),
    2016 => array(
        array(
            'time' => '12-07',
            'title' => '妙味新闻news1',
            'link' => 'http://miaov.com',
        ),
        array(
            'time' => '11-07',
            'title' => '妙味新闻news2',
            'link' => 'http://miaov.com',
        ),
        array(
            'time' => '10-07',
            'title' => '妙味新闻news3',
            'link' => 'http://miaov.com',
        ),
    ),
    2015 => array(
        array(
            'time' => '11-07',
            'title' => '妙味新闻news1',
            'link' => 'http://miaov.com',
        ),
        array(
            'time' => '08-07',
            'title' => '妙味新闻news2',
            'link' => 'http://miaov.com',
        ),
        array(
            'time' => '06-07',
            'title' => '妙味新闻news3',
            'link' => 'http://miaov.com',
        ),
    ),
);

foreach ($newsList as $key => $value) {
    echo "$key<br><br>";
    foreach ($value as $news) {
        echo $news['time']."<a href='".$news['link']."'>".$news['title']."<a><br><br>";
    }
    echo '====================================<br><br>';
}