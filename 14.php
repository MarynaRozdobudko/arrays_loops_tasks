<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.02.2018
 * Time: 15:32
 * 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте
 * есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!',
 * иначе выведите 'Нет!'.
 */

$arr = [4, 2, 5, 19, 13, 0, 10];

foreach ($arr as $e){
    if ($e >= 2 and $e <= 4){
        echo ' Есть! ';
        break;
    } else {
        echo ' Нет! ';
    }
}