<?php
/**
 * Cú pháp do while
 */

$x = 1; // biến khởi tạo
do {
    echo "{$x} <br>";
    $x++; // biến tăng
}while($x <= 5); // điều kiện chạy vòng lặp

echo "<hr>";

/**
 * Trường hợp: kiểm tra lần đầu ĐK mà FALSE => thực hiện đoạn code ít nhât 1 lần bên trong loop
 */

$i = 6; // biến khởi tạo
do {
    echo $i . '<br>';
    $i++; // biến tăng
}while($i <= 5); // điều kiện chạy vòng lặp


echo '<hr>';
/**
 *
 * Bài tập: 1/2 + 1/4 + 1/6 + ... 1/n
 * Điều kiện: 1/n < 0.0001
 */

$n = 2;
$total = 0;
do {
    $total += 1/$n;
    $n += 2;
}while(1/$n >= 0.0001);
echo $total;