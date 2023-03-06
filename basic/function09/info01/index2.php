<?php
require_once './myFunction.php'; // Import file myFunction.php
require_once './myFunc.php'; // Import file myFunc.php

if(function_exists('makeTotal')) {
    // Gọi hàm
    makeTotal(5, 2);
}
echo '<br>';

$numA = 10;
$numB = 9;
if(function_exists('makeTotal')) {
    makeTotal($numA, $numB);
}
echo '<hr>';

// gọi hàm getMessages()
if(function_exists('getMessages')) {
    getMessages();
}

echo '<hr>';
// gọi hàm getNumber()
if(function_exists('getNumber')) {
    getNumber(11, 'kq');
}

echo '<hr>';
if(function_exists('buildMenu')) {
    buildMenu(false, 'category');
}