<?php
/**
 * Tính gia thừa của 1 số và hiển thị kết quả
 *
 * Input: nhập vào số N
 * Output: Hiển thị kết quả N!
 *
 * Công thức:  N! = 1 * 2 * 3 ... * N (Điều kiện N > 0)
 *
 * Ví dụ: giai thừa của 5! = 1 * 2 * 3 * 4 * 5 kết quả là 120
 *
 */

$num = 2;

// kiểm tra điều kiện
if($num > 0) {
    //xử lý giai thừa
    $result = 1; // giả định là 1
    for ($i = 1; $i <= $num; $i++){
        $result *= $i;
    }
    echo "Giải thừa {$num}! = ". $result;
} else {
    echo "không hợp lệ";
}
