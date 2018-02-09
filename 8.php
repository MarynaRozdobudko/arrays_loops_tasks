<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.02.2018
 * Time: 20:04
 * 8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
 * С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = '-';
foreach ($arr as $value) {
    $str = $str."{$value}-";
}
echo $str;