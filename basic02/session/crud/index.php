<?php
require_once 'functions.php';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?= getSession('alertSuccess', true); ?>
            <h1>Danh Sách Sản Phẩm</h1>
            <a href="create.php" target="_self" class="btn btn-success mb-2" title="Thêm mới">Thêm mới</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col" style="width: 20%">ID</th>
                    <th scope="col">Tên Sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col" style="width: 16%">Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                <?php if(!empty($_SESSION['products'])): $countId = 1; ?>

                <?php foreach ($_SESSION['products'] as $product): ?>
                    <tr>
                        <td><?= $countId ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td><?= number_format($product['product_price']) ?></td>
                        <td>
                            <a href="delete.php?id=<?= $product['product_id'] ?>" target="_self" class="btn btn-danger" title="Xoá">Xoá</a>
                            <a href="edit.php?id=<?= $product['product_id'] ?>" target="_self" class="btn btn-primary" title="Cập nhật">Cập nhật</a>
                        </td>
                    </tr>
                <?php $countId++; endforeach; ?>

                <?php else: ?>
                    <tr>
                        <th scope="row" colspan="4" style="text-align: center">NO DATA</th>
                    </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>