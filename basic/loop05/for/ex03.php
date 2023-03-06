<?php
/**
 * Kiểm tra 1 số có phải là số nguyên tố hay không và hiển thị kết quả
 *
 * Input: số nguyên N
 * Output: hiển thị thông báo N là số nguyên tố không
 *
 * Số nguyên tố
 * - Lớn hơn 1
 * - Chỉ chia hết cho 1 và chính nó
 *
 * Giải thuật
 * - kiểm tra số N xem có lớn hơn 1 không
 * - Nếu số N lớn hơn 1:
 *    + Dùng vòng lặp chạy từ 2 đến (N-1)
 *    + Kiểm tra trong phạm vi từ 2 đến (N-1) có chia hết số nào không ?
 *       + Nếu chia hết => Kết luận không phải số nguyên tố
 *       + Nếu không chia hết => Kết luận là số nguyên tố
 * - Nếu số N nhỏ hơn hoặc bằng 1 => thông báo không phải số nguyên tố
 */

$n = 6; // số N cần kiểm tra

if($n > 1){
    $check = true; // flag: biến giả định - kiểm tra số nguyên tố (giả định n là số nguyên tố)
    for($index = 2; $index < $n; $index++){
        if($n % $index == 0){
            $check = false;
            break; // từ khoá Thoát khỏi vòng lặp
        }
    }

    if($check){ // if($check == true)
        echo $n . " là số nguyên tố";
    }else{
        echo $n . " không phải số nguyên tố";
    }

}else{
    echo $n . " không phải số nguyên tố";
}