<?php
/**
 * Vấn đề khi duyệt mảng
 * Lưu ý: trước khi duyệt mảng
 * 1. Kiểm tra biến tồn tại
 * 2. kiểm tra kiểu dữ liệu phải là mảng dùng hàm is_array()
 * 3. Kiểm tra có phần tử mảng không
 * => 1 và 3 dùng hàm empty()
 */

$customers = [];
// kiểm tra mảng trước khi duyệt mảng
if(!empty($customers) && is_array($customers)) {
    foreach ($customers as $key => $value) {
        echo $value;
    }
} else {
    echo 'Mảng không hợp lệ';
}
echo '<br>';

// Trường hợp: duyệt mảng tuần tự
$brands = ['samsung', null, 'apple', false, 'sony', 'xiaomi'];
for($i = 0; $i < count($brands); $i++) {
    // Kiểm tra mảng tuần tự trước khi duyệt mảng
    // Dùng isset() để kiểm tra ???
    if(isset($brands[$i])) {
        var_dump($brands[$i]);
        echo '<br>';
    }
}