<?php
//Nhúng file autoload.php trong thư mục vendor
require_once 'vendor/autoload.php';



// Nhúng class không cần phải require, include
use \App\Home;
use \App\Product;

$home = new Home();
echo '<br>';
$product = new Product();
echo '<hr>';

// Nhúng class trong thư mục lib
use \App\Lib\Email;
$email = new Email();
echo '<hr>';

// Nhúng thư mục cung cấp với app
use App\ProductRequest;
$ProductRequest = new ProductRequest();
echo '<hr>';

// Nhúng file php
getMsg();