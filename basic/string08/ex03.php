<?php
/**
 * Bài 3: Viết chương trình xoá chữ đầu tiên trong chuỗi
 * Input: Huỳnh Hiếu Phú
 * Ouput: Hiếu Phú
 *
 */

$strInput = 'Huỳnh Hiếu Phú';
//Xử lý
$posFirstSpace = mb_strpos($strInput, ' ', null, 'UTF-8');
$firstWord = mb_substr($strInput, 0, $posFirstSpace + 1);
$endStr = str_replace($firstWord, '', $strInput);
//Output
var_dump($endStr);
echo "<br>";


/**
 * Trường khác:
 * Input: Huỳnh Hiếu Huỳnh Phú
 * Ouput: Hiếu Huỳnh Phú
 *
 */
$strInput2 = 'Huỳnh Hiếu Huỳnh Phú';
$posFirstSpace2 = mb_strpos($strInput2, ' ', null, 'UTF-8');
$strLeftLen = mb_strlen($strInput2, 'UTF-8') - ($posFirstSpace2 + 1);
$endStr2 = mb_substr($strInput2, $posFirstSpace2 + 1, $strLeftLen, 'UTF-8');
var_dump($endStr2);