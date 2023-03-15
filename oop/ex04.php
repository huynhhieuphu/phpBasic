<?php
/**
 * Thiết lập phương thức set() và get() cho thuộc tính.
 * Dùng phương thức làm trung gian để truy cập vào phương thức không thể truy cập.
 */
require_once 'classes/Calculator.php';

$calc = new Calculator();
$calc->setUserName('phuhh');
$calc->setPassword('123456');
echo $calc->getUserName();
echo '<hr>';


$calc->showUserName();
$calc->showPassword();