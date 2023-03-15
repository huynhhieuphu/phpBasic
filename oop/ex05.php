<?php
/**
 * Phương thức __contruct() và __destruct()
 *
 * Những hành động có thể làm trong hàm __contruct() :
 * - Tham số truyền vào hàm khởi tạo
 * - Gán giá trị cho thuộc tính
 * - Lấy đối tượng làm trung gian (gán đối tượng vào thuộc tính)
 *
 * Sử dụng hằng số có sẵn: __CLASS__ , __METHOD__
 */
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