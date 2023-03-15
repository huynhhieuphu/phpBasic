<?php
require_once 'classes/Math.php';


$math = new Math();

// Truy cập thuộc tính không được phép truy cập
// Cách 1: tạo ra phương thức public lấy ra.
echo $math->getNumberA();
echo '<br>';

// Cách 2: dùng phương thức magic __get()
echo $math->propertyA;
echo '<hr>';


// Gán thuộc tính không được phép truy cập
// Cách 1: tạo ra phương thức public gán
$math->setNumberB(999);
echo $math->propertyB;
echo '<br>';

// Cách 2: dùng phương thức magic __set()
$math->propertyB = 777;
echo $math->propertyB;
echo '<hr>';

// Truy cập phương thức không được tồn tại
// dùng phương thức magic __call()
$math->methodNotFound('value 1', 'value 2');
echo '<hr>';

// Truy cập phương thức tĩnh không được tồn tại
$math::methodStaticNotFound('value 1', 'value 2');