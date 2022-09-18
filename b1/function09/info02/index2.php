<?php
/**
 * Biến cục bộ, biến toàn cục
 *
 * - Biến cục bộ:
 *    + Biến cục bộ là biến được sử dụng trong phạm vi hàm
 *    + Biến cục bộ không được sử dụng bên ngoài hàm hoặc trong hàm khác
 *
 * - Biến toàn cục:
 *    + Biến được sử dụng ngoài hàm
 *    + Muốn sử dụng biến toàn cục trong hàm => Phải khai báo bằng từ khoá global
 *
 * - Biến Tĩnh:
 *    + Không thay đổi giá trị của hàm khi gọi hàm.
 */

// biến cục bộ
function makeTotal($a, $b) {
    $total = $a + $b;
    // biến $total được gọi là biến cục bộ
    // chỉ hoạt động trong hàm makeTotal
    // không hoạt động được bên ngoài hàm
    // biến $a, $b được gọi là tham số.
    return $total;
}

// biến toàn cục (global)
$result = 'phep nhan'; // biến $result gọi là biến toàn cục

function makeMulti($a, $b) {
    global $result; // Để biến $result chạy được trong hàm sử dụng từ khoá global
    echo $result . "<br>";

    return $a * $b;
}
$rs = makeMulti(5,10);
echo $rs;
echo '<hr>';

// Trường hợp sử dụng hàm không return
$data = 'ni hao';
echo $data;
echo '<br>';

function changeData($msg) {
    global $data;
    $data = $msg;
}
changeData('xin chao');
echo $data; // làm thay đổi giá trị của $data
echo '<hr>';


// Biến tĩnh (static)

function countNumber() {
    $number = 0;
    $number++;
    echo $number;
}
countNumber(); // OUTPUT: 1
echo '<br>';
countNumber(); // OUTPUT: 1
echo '<br>';
countNumber(); // OUTPUT: 1
echo '<hr>';

function countNumberStatic() {
    static $number = 0; // sử dụng từ khoá static sẽ giữ lại giá trị biến
    $number++;
    echo $number;
}
countNumberStatic(); // OUTPUT: 1
echo '<br>';
countNumberStatic(); // OUTPUT: 2
echo '<br>';
countNumberStatic(); // OUTPUT: 3