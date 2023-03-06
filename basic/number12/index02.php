<?php
/**
 *
 * Lưu ý: Dấu chấm và dấu phẩy trong kiểu dữ liệu số
 * - Dấu chấm .
 *    + Ngôn ngữ đọc hiểu là hàng ngàn, hàng triệu,...
 *    + Ngôn ngữ tin học hiểu là số thập phân
 * - Dấu phẩy ,
 *    + Ngôn ngữ đọc hiểu là số thập phân
 *    + Ngôn ngữ tin học không có ý nghĩa chỉ là ký tự
 */

$number = '100.000';

if (is_numeric($number)) {
    echo 'Đây là kiểu số';
} else {
    echo 'Không là kiểu sổ';
}
echo '<br>';

$total = ($number + 200000);
echo $total; // OUTPUT: 200100
echo '<br>';

$number2 = str_replace('.','', $number);
$total2 = ($number2 + 200000);
echo $total2; // OUTPUT: 300000
echo '<br>';

$number3 = '100.000,05';
$number3 = str_replace('.','', $number3); // Đâu tiên: xoá hết dấu chấm
$number3 = str_replace(',','.', $number3); // Sau đó: thay thế dấu phẩy thành dấu chấm để hiểu là số thập phân
if (is_numeric($number3)) {
    echo 'Đây là kiểu số';
} else {
    echo 'Không là kiểu sổ';
}
echo '<br>';
$total3 = ($number3 + 200000);
echo $total3; // OUTPUT: 300000.05
echo '<br>';


/**
 * Kết luận: trong thực tế 1 số trường hợp chuỗi số (đang là ngôn ngữ đọc hiểu) cần chuyển đổi sang
 * ngôn ngữ tin học để xử lý...
 */