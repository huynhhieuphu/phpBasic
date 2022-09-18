<?php
/**
 * Bài 4: Viết chương trình đảo ngược chữ đầu và chữ cuối trong chuỗi
 *
 * Input: Lorem ipsum dolor sit amet
 * Output: Ament ipsum dolor sit lorem
 */

$strInput = 'Lorem ipsum dolor sit amet';

//Xử lý chuỗi

// 1. Lấy ra chữ đầu tiên
$posFirstSpace = mb_strpos($strInput, ' ', null, 'UTF-8');
$firstWord = mb_substr($strInput, 0, $posFirstSpace, 'UTF-8');
// 2. Lấy ra chữ cuối cùng
$posLastSpace = mb_strripos($strInput, ' ', null, 'UTF-8');
$strInputLen =  mb_strlen($strInput, 'UTF-8');
$endWord = mb_substr($strInput, $posLastSpace + 1, $strInputLen, 'UTF-8');
// 3. Chèn và thay thế
$middleWord = mb_substr($strInput, $posFirstSpace, ($posLastSpace - $posFirstSpace) + 1, 'UTF-8');

$strOutput = ucfirst($endWord) . $middleWord . lcfirst($firstWord);
//Ouput
echo 'Input: ' . $strInput . '<br>';
echo 'Output: ' . $strOutput;