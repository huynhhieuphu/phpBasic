<?php
/**
 * Cú pháp vòng lặp while
 * while, do while: Không biết trước được số lần lặp
 */

$i = 1; // init counter
while ($i <= 5) { // test counter
    echo "Vòng lặp thứ " . $i . "<br>"; //code to be executed for each iteration;
    $i++; // increment counter
}

/**
 * $i = 1 => kiểm tra ĐK TRUE => thực hiện code => tăng lên đơn vị
 * $i = 2 => kiểm tra ĐK TRUE => thực hiện code => tăng lên đơn vị
 * $i = 3 => kiểm tra ĐK TRUE => thực hiện code => tăng lên đơn vị
 * $i = 4 => kiểm tra ĐK TRUE => thực hiện code => tăng lên đơn vị
 * $i = 5 => kiểm tra ĐK TRUE => thực hiện code => tăng lên đơn vị
 * $i = 6 => kiểm tra ĐK FALSE => Thoát khỏi loop while
 *
 */

echo '<hr>';

/**
 * Trường hợp: kiểm tra lần đầu điều kiện mà FALSE => không thực hiện đoạn code nào bên trong loop
 */

$i = 6; // init counter
while ($i <= 10) { // test counter
    echo "Vòng lặp thứ " . $i . "<br>"; //code to be executed for each iteration;
    $i++; // increment counter
}

echo '<hr>';

/**
 * Bài tập: tính tổng
 * S = 1+2+3+4+5+...+n
 *
 */
$n = 10; // biến dừng
$i = 1; // biến khởi tạo
$total = 0; // biến giả định
while ($i <= $n){
    // $i++; giá trị thay đổi nếu biến tăng $i đặt tại đây. khi này giá trị biến tăng đã thành 2
    $total += $i;
    $i++; // biến tăng mỗi loop
}
// lưu ý: giá trị có thể bị thay đổi nếu biến tăng đặt không đúng cách.
echo "Tổng: " . $total . "<br>";

/**
 * Bài tập: 1/2 + 1/4 + 1/6 + ... 1/n
 * Điều kiện: 1/n < 0.0001
 *
 */

$n = 2; // biến khởi tạo
$total = 0; // biến giả định
while(1/$n >= 0.0001){
    $total += 1/$n;
    $n+=2; // biến tăng 2 đơn vị
}
echo "Tổng: " . $total . "<br>";

/**
 * LƯU Ý:
 * - Những bài toán viết được bằng for đều chuyển được sang while
 * - Ngược lại, những bài toán viết được bằng while chưa chắc chuyển sang for
 *
 */


