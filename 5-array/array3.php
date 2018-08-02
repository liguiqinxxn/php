<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/26
 * Time: 15:13
 */
$newsList = array('news1','news2','news3','news4');
foreach ($newsList as $news){
    echo '<br>'.$news;
}
foreach ($newsList as $key => $value){
    echo '<br>'.$key.'=>'.$value;
}