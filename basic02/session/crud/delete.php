<?php
require_once 'config.php';

$redirect = false;
if(!isset($_POST['product_id'])) {
    $redirect = true;
}

if(empty($_SESSION['products'])) {
    $redirect = true;
}

if(!$redirect && array_key_exists($_POST['product_id'], $_SESSION['products'])) {
    $productId = $_POST['product_id'];
    $product = $_SESSION['products'][$productId];
    $productName = $product['product_name'];
    unset($_SESSION['products'][$productId]);
    setSession('alertSuccess', '<div class="alert alert-danger">Sản phẩm <b>'. $productName .'</b> vừa xoá thành công</div>');
    $redirect = true;
}

if($redirect) {
    redirect('index.php');
}