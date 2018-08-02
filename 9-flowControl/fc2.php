<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/27
 * Time: 19:09
 */
for ($i=0;$i<11;$i++){
    if ($i==3){
        echo '不输出3'.'<br>';
        continue;
    }
    if ($i>6){
        break;
    }
    echo $i.'<br>';
}

echo '<hr>';
exit('over');

$i = 0;
while($i<11){
    echo $i.'<br>';
    $i=$i+1;
}

echo '<hr>';

$i = 0;
do{
    echo $i.'<br>';
    $i++;
}while($i<11);