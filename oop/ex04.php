<?php
require_once 'classes/Calculator.php';

$calc = new Calculator();
$calc->setUserName('phuhh');
$calc->setPassword('123456');
echo $calc->getUserName();
echo '<hr>';


$calc->showUserName();
$calc->showPassword();