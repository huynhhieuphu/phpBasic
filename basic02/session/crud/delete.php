<?php
require_once 'functions.php';

$redirect = false;
$oldProduct = null;

if(!isset($_GET['id']) && empty($_GET['id'])) {
    $redirect = true;
}

if(empty($_SESSION['products'])) {
    $redirect = true;
}

if(!$redirect && array_key_exists($_GET['id'], $_SESSION['products'])) {
    $oldProduct = $_SESSION['products'][$_GET['id']];
    $productName = $oldProduct['product_name'];
    unset($_SESSION['products'][$_GET['id']]);
    setSession('alertSuccess', '<div class="alert alert-danger">Sản phẩm <b>'. $productName .'</b> vừa xoá thành công</div>');
    $redirect = true;
}

if($redirect) {
    redirect('index.php');
}

