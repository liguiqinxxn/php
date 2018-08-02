<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/26
 * Time: 15:59
 */
$newsList = array(
    array(
        'time' => '05-17',
        'title' => 'news1',
        'link' => 'miaov.com',
//        'isNew' => 'yes',
    ),
    array(
        'time' => '05-17',
        'title' => 'news1',
        'link' => 'miaov.com'
    ),
    array(
        'time' => '05-17',
        'title' => 'news1',
        'link' => 'miaov.com'
    ),
    array(
        'time' => '05-17',
        'title' => 'news1',
        'link' => 'miaov.com'
    ),
);

foreach ($newsList as $value) {
//    echo $value['time'].$value['title'].$value['link'];
//    echo '<br>';
//    print_r($value);

    foreach ($value as $v){
        echo $v;
    }
    echo '<br>';
}

foreach ($newsList as $key => $value) {
    echo '这是第'.($key+1).'条新闻：';
    echo $value['time'].$value['title'].$value['link'].'<br>';
}