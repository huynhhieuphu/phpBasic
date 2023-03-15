<?php
/**
 * Abstract Class
 */
require_once 'classes/AbstractClass.php';
require_once 'classes/ProductClass.php';


// abstract class không thể khởi tạo đối tượng
// $abstractModel = new AbstractModel; // LỖI

$productModel = new ProductClass();

var_dump($productModel);

echo '<pre>';
print_r($productModel::_DB_INFO);
exit();
