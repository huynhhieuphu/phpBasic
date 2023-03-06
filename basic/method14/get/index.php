<?php
/**
 * Trường hợp nếu file đó index.php vẫn bình thường
 *
 * http://localhost:8080/phpbasic/b1/method14/get/?username=hieuphu&email=hieuphu@bincg.com&age=32
 */

//echo "<pre>";
//print_r($_GET);
//exit();


// Trường hợp encode URL
// Hàm urlencode() dùng để mã hoá chuỗi. TH dùng tới tìm kiếm từ khoá bằng tiếng việt,...
$dataUrl = ['Tin Tức', 'Sản Phẩm'];

foreach ($dataUrl as $item) {
    $encodeUrl = urlencode($item);
    $module = '?module='.$encodeUrl;
    echo '<a href="'.$module.'">'.$item.'</a><br>';
}

// Hàm urldecode() dùng để giải mã chuỗi.
if(isset($_GET['module'])) {
    $module = urldecode($_GET['module']);
    echo 'Module: ' . $module;
}

// BIẾN TOÀN CỤC $_SERVER lưu trữ thông tin SERVER.

echo "<pre>";
print_r($_SERVER);
echo "</pre>";


// Tham số QUERY_STRING trong $_SERVER dùng để lấy tham số URL. Thường dùng trong dùng trong tìm kiếm, phân trang

echo 'QUERY_STRING: ' . $_SERVER['QUERY_STRING'];

