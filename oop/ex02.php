<?php
require_once 'classes/Calculator.php';

$calc = new Calculator();

$calc->setNumberA(15);
$calc->setNumberB(10);

echo $calc->getNumberA();
echo '<br>';
echo $calc->getNumberB();
echo '<hr>';

//$total = $calc->makeAdd($calc->numberA, $calc->numberB);
//echo $calc->showResult($calc::_MSG_CONTENT, $total);
//echo '<br>';


$total = $calc->makeAdd($calc->getNumberA(), $calc->getNumberB());
echo $calc->showResult($calc::_MSG_CONTENT, $total);
echo '<br>';

$calc->setNumberA(150);
$calc->setNumberB(10);

$total = $calc->makeAdd();
echo $calc->showResult($calc::_MSG_CONTENT, $total);
echo '<br>';
