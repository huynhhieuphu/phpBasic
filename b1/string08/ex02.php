<?php
/**
 * Bài 2: Viết chương trình lấy 5 ký tự cuối chuỗi
 */
$strInput = 'Học lập trình tại Lorem Ipsum';
$endStr = substr($strInput, -5);
echo $endStr . '<br>';

$strInput2 = 'Học lập trình';
$endStr2 = mb_substr($strInput2, -5, null, 'UTF-8');
echo $endStr2 . '<br>';