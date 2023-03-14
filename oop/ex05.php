<?php
require_once 'classes/Math.php';
require_once 'classes/Calculator.php';

$config = [
    'baseUrl' => 'uploads',
    'allowFiles' => ['jpeg','jpg','png','svg'],
    'allowSizes' => 1024
];
$calc = new Calculator($config);

echo $calc->showClassName();
echo '<br>';

echo $calc->numberD;
echo '<br>';

echo $calc->sqrt(9);
echo '<br>';