<?php
require_once 'config.php';
$title = 'Danh Sách Sản Phẩm';
include_once 'partials/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?= getSession('alertSuccess', true); ?>
            <h1><?= $title ?? '' ?></h1>
            <a href="create.php" target="_self" class="btn btn-success mb-2" title="Thêm mới">Thêm mới</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="post" action="delete.php" name="form_products" id="form_products">
                <input type="hidden" name="product_id" id="product_id" value="0">

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
                            <a href="javascript:void(0);" class="btn btn-danger" title="Xoá"
                               onclick="actionDelete('form_products', 'product_id', '<?= $product["product_id"] ?>')">Xoá</a>
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

            </form>
        </div>
    </div>
</div>

<?php
include_once 'partials/footer.php';
?>