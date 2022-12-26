<?php
// is_numeric kiểm tra giá trị của biến là số hay không ?
// (check được số nguyên, số thực và chuỗi số)

// Trường hợp: Xử lý chuỗi số
$number = ' 200,250 000.845';
// Thay thế chuỗi để xoá dấu phẩy và khoảng cách
$number = str_replace(',', '', $number);
$number = str_replace(' ', '', $number);
$number = trim($number);

$checkNumber = is_numeric($number);
if($checkNumber) {
    echo 'Đây là kiểu số';
} else {
    echo 'Đây không phải kiểu số';
}
