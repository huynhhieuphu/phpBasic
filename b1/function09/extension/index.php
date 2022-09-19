<?php
/**
 * Hàm không giới hạn tham số
 */

// Cách 1: sử dụng hàm func_get_args()
function func_name() {
    // Hàm func_get_args lấy ra các giá trị truyền vào.
    $args = func_get_args();
    print_r($args);
    echo '<br>';
    // Hàm func_get_arg lấy giá trị theo index tham số không giới hạn
    echo func_get_arg(2);
    echo '<br>';
    // Hàm func_num_args lấy ra tổng số lượng tham số không giới hạn
    echo "Số lượng Tham số không giới hạn: " . func_num_args();
}
func_name('Hello', 12, 1991); // truyền tham số thực vào hàm (dù không có tham số hình thức nào)

echo '<hr>';

// Cách 2: Tham số hình thức có 3 dấu chấm đặt phía trước (chỉ định tham số không giới hạn)
function func_name_case_2(...$args) {
    // $args đại diện tham số không giới hạn
    print_r($args); // hiển thị các giá trị của tham số không giới hạn
    echo "<br>";
    echo $args[0]; // hiển thị giá trị theo index tham số không giới hạn.
}
func_name_case_2('Lorem', 9999, 'Abc');

// Thông thường khi nhiều tham số, tham số không giới hạn đặt cuối cùng (vì không biết còn bao nhiêu tham số nữa)
function func_name_other($arg_1, $arg_2, ...$args) {
    //do something...
}