<?php
require_once 'config.php';
$title = 'Cập Nhật Sản Phẩm';
include_once 'partials/header.php';
?>

<?php

$redirect = false;
$oldProduct = null;

if(!isset($_GET['id']) && empty($_GET['id'])) {
    $redirect = true;
}

if(empty($_SESSION['products'])) {
    $redirect = true;
}

if(array_key_exists($_GET['id'], $_SESSION['products'])) {
    $oldProduct = $_SESSION['products'][$_GET['id']];
}else{
    $redirect = true;
}

if($redirect) {
    redirect('index.php');
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnUpdate'])){
    $productId = isset($_POST['product_id']) ? trim($_POST['product_id']) : null;
    $productName = isset($_POST['product_name']) ? trim($_POST['product_name']) : null;
    $productPrice = isset($_POST['product_price']) ? trim($_POST['product_price']) : null;

    $message = [];

    if(empty($productName)) {
        $message['product_name'] = 'Tên sản phẩm không để trống';
    } else if(strlen($productName) < 5) {
        $message['product_name'] = 'Tên sản phẩm ít nhất 6 ký tự';
    }

    if(empty($productPrice)) {
        $message['product_price'] = 'Giá sản phẩm không để trống';
    } else if(!filter_var($productPrice, FILTER_VALIDATE_INT, ['options' => ['min_range' => 10000, 'max_range' => 100000000]])) {
        $message['product_price'] = 'Giá sản phẩm ít nhất 10.000 nhiều nhất 100.000.000';
    }

    if(empty($message)) {
        $newProduct = [
            'product_id' => $productId,
            'product_name' => $productName,
            'product_price' => $productPrice
        ];

        $updateData = true;
        if(!empty($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $item) {
                if($productId != $item['product_id'] && $newProduct['product_name'] == $item['product_name']) {
                    $message['product_name'] = 'Tên sản phẩm đã tồn tại';
                    $updateData = false;
                    break;
                }
            }
        }

        if ($updateData) {
            $_SESSION['products'][$productId] = $newProduct;
            $message['alertSuccess'] = '<div class="alert alert-success">Cập Nhật Thành Công</div>';
        }

        if(!$updateData) {
            $message['alertFail'] = '<div class="alert alert-danger">Cập Nhật Thất Bại</div>';
        }
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1><?= $title ?? '' ?></h1>

            <?php echo isset($message['alertFail']) ? $message['alertFail'] : false; ?>
            <?php echo isset($message['alertSuccess']) ? $message['alertSuccess'] : false; ?>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
                <input type="hidden" name="product_id" value="<?php echo isset($oldProduct['product_id']) ? $oldProduct['product_id'] : false ?>">
                <div class="form-group">
                    <label for="product_name">Tên Sản Phẩm</label>
                    <input type="text"
                           name="product_name"
                           class="form-control <?php echo isset($message['product_name']) ? 'border-red' : false; ?>"
                           value="<?php echo isset($_POST['product_name']) ? $_POST['product_name'] : (isset($oldProduct['product_name']) ? $oldProduct['product_name'] : false) ?>"
                    >
                    <?php echo isset($message['product_name']) ? '<span class="text-danger">'. $message['product_name'] .'</span>' : false ?>
                </div>
                <div class="form-group">
                    <label for="product_price">Giá</label>
                    <input type="text"
                           name="product_price"
                           class="form-control <?php echo isset($message['product_price']) ? 'border-red' : false; ?>"
                           value="<?php echo isset($_POST['product_price']) ? $_POST['product_price'] : (isset($oldProduct['product_price']) ? $oldProduct['product_price'] : false) ?>"
                    >
                    <?php echo isset($message['product_price']) ? '<span class="text-danger">'. $message['product_price'] .'</span>' : false ?>
                </div>
                <button type="submit" name="btnUpdate" class="btn btn-primary">Cập nhật</button>
                <a href="index.php" target="_self" class="btn btn-secondary" title="Quay lại">Quay lại</a>
            </form>
        </div>
    </div>
</div>

<?php
include_once 'partials/footer.php';
?>