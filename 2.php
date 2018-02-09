<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.02.2018
 * Time: 15:08
 * Работа с foreach
 * 2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива.
 * Запишите ее в переменную $result.
 */

$arr = [1,20,15,17,24,35];
$result = 0;

foreach ($arr as $value){
    $result=$result+$value;
    //$result+=$value;
}
echo $result;