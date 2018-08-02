<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/28
 * Time: 10:34
 */
calculator(18,8,'*');

function calculator($num1, $num2, $op){
    if (!is_numeric($num1) || !is_numeric($num2)){
        echo '数值不符合要求';
    }else{
        switch ($op){
            case '+':
                echo $num1+$num2;
                break;
            case '-':
                echo $num1-$num2;
                break;
            case '*':
                echo $num1*$num2;
                break;
            case '/':
                if ($num2 == 0){
                    echo '除数不能为0';
                    break;
                }
                echo $num1/$num2;
                break;
            default :
                echo '未知运算符';
                break;
        }
    }
}