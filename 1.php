<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.02.2018
 * Time: 15:08
 * Работа с foreach
 * 1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
 */

$arr=['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $value)
{
    echo $value."<br>";
    //echo "{$value}<br>\n";
    //echo $ar."\n";
}