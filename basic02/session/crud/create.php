<?php
    require_once 'functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Mới Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .border-red {
            border-color: red;
        }
    </style>
</head>
<body>

<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnAdd'])){
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
            $productId = uniqid();
            $newProduct = [
                'product_id' => $productId,
                'product_name' => $productName,
                'product_price' => $productPrice
            ];

            $insertData = true;
            if(!empty($_SESSION['products'])) {
                foreach ($_SESSION['products'] as $product) {
                    if($product['product_name'] == $newProduct['product_name']) {
                        $message['product_name'] = 'Tên sản phẩm đã tồn tại';
                        $insertData = false;
                        break;
                    }
                }
            }

            if ($insertData) {
                $_SESSION['products'][$productId] = $newProduct;
                setSession('alertSuccess', '<div class="alert alert-success">Thêm Mới Thành Công</div>');
                redirect('index.php');
            }

            if(!$insertData) {
                $message['alertFail'] = '<div class="alert alert-danger">Thêm Mới Thất Bại</div>';
            }
        }
    }

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Thêm Mới Sản Phẩm</h1>

            <?php echo isset($message['alertFail']) ? $message['alertFail'] : false; ?>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
                <div class="form-group">
                    <label for="product_name">Tên Sản Phẩm</label>
                    <input type="text"
                           name="product_name"
                           class="form-control <?php echo isset($message['product_name']) ? 'border-red' : false; ?>"
                           value="<?php echo isset($_POST['product_name']) ? $_POST['product_name'] : false ?>"
                    >
                    <?php echo isset($message['product_name']) ? '<span class="text-danger">'. $message['product_name'] .'</span>' : false ?>
                </div>
                <div class="form-group">
                    <label for="product_price">Giá</label>
                    <input type="text"
                           name="product_price"
                           class="form-control <?php echo isset($message['product_price']) ? 'border-red' : false; ?>"
                           value="<?php echo isset($_POST['product_price']) ? $_POST['product_price'] : false ?>"
                    >
                    <?php echo isset($message['product_price']) ? '<span class="text-danger">'. $message['product_price'] .'</span>' : false ?>
                </div>
                <button type="submit" name="btnAdd" class="btn btn-success">Thêm mới</button>
                <a href="index.php" target="_self" class="btn btn-secondary" title="Quay lại">Quay lại</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>