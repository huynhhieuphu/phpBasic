<?php
/**
 * 1.Hàm là gì ?
 *  - Hàm là 1 chương trình con thực hiện 1 khối công việc được lặp đi lặp lại nhiều lần trong chương trình
 *  - Hàm dùng tách 1 khối công việc cụ thể để chương trình đỡ phức tạp
 *
 * 2.Tác dụng của hàm
 *  - Dễ bảo trì, dễ quản lý
 *  - Có thể tái sử dụng
 *
 * 3.Cú pháp định nghĩa hàm:
 *
 * function ten_ham(cac_tham_so) {
 *    // noi_dung_ham
 * }
 *
 *  - ten_ham: quy tắc đặt tên giống như biến (tên hàm thường dùng động tự)
 * Ví dụ bắt đầu bằng những từ:
 *      + do
 *      + make
 *      + create
 *      + build
 *  - cac_tham_so: tương tự như biến, cách nhau bởi dấu phẩy
 *  - noi_dung_ham: Nơi xử lý logic
 *
 * 4.Cú pháp gọi hàm
 * ten_ham(cac_tham_tri)
 */

// Định nghĩa hàm
function makeTotal($a, $b) {
    $total = null;
    $total = $a + $b;
    echo 'Total: ' . $a . ' + ' . $b . ' = ' . $total;
}

// Gọi hàm
makeTotal(5, 2);
echo '<br>';

$numA = 10;
$numB = 9;
makeTotal($numA, $numB);
echo '<hr>';

// Định nghĩa hàm không có tham số
function getMessages() {
    echo 'Đây là thông báo';
}

// gọi hàm getMessages()
getMessages();