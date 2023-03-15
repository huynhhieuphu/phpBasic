<?php
/**
 * Các hàm kiểm tra tồn tại property và method
 */
require_once 'classes/Calculator.php';

$calc = new Calculator();
$calc->setNumberC('php');


// 1. Kiểm tra thuộc tính tồn tại

// Cách 1: dùng hàm isset() và empty()
if(isset($calc->numberC) && !empty($calc->numberC)) {
    var_dump($calc->numberC);
} else {
    echo 'Thuộc tính không tồn tại';
}

echo '<hr>';

// Cách 2: dùng hàm property_exists('ClassName', 'propertyName');
if(property_exists('Calculator', 'numberC')) {
    var_dump($calc->numberC);
} else {
    echo 'Thuộc tính không tồn tại';
}
echo '<hr>';

// 2. Kiểm tra phương thức có tồn tại trong class không
if(method_exists('Calculator', 'getNumberC')) {
    echo $calc->getNumberC();
} else {
    echo 'Phương thức không tồn tại';
}