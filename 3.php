<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.02.2018
 * Time: 15:08
 * Работа с foreach
 * 3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
 */

$arr = [26,17,136,12,79,15];
$result = 0;
foreach ($arr as $value){
    //$result = $result + $value*$value;
    //$result += $value*$value;
    $result += $value ** 2;
}
echo $result;