<?php
// Cú pháp vòng lặp for

for($i = 0; $i < 10; $i++){
    echo "Vòng lặp " . $i . "<br>";
}
echo "<hr>";

// thay vì gán giá trị trực tiếp thì truyền biến
$start = 1;
$count = 10;

for($i = $start; $i <= $count; $i++){
    echo "Vòng lặp " . $i . "<br>";
}

echo "<hr>";

// tham số thứ 3 ngoài tăng lên 1 đơn vị có thể tăng 2 đơn vị hoặc hơn

for($i = 0; $i <= 10; $i+=2){
    echo "Vòng lặp " . $i . "<br>";
}

echo "<hr>";

// Ví dụ: Tính tổng từ số cho trước $n = 5 => $kq = 15
// 1 + 2 + 3 + 4 + 5 = 15

$kq = 0;
for($i = 1; $i <= 5; $i++) {
    $kq += $i;
}

// $i = 1; 1 <= 5 true; $kq = 0 + 1 = 1; $i tăng lên 2
// $i = 2; 2 <= 5 true; $kq = 1 + 2 = 3; $i tăng lên 3
// $i = 3; 3 <= 5 true; $kq = 3 + 3 = 6; $i tăng lên 4
// $i = 4; 4 <= 5 true; $kq = 6 + 4 = 10; $i tăng lên 5
// $i = 5; 5 <= 5 true; $kq = 10 + 5 = 15; $i tăng lên 6
// $i = 6; 6 <= 5 false; exit loop;
// $kq = 15

echo "Sum:" . $kq;
echo "<hr>";

// Vòng lặp giảm dần
for($i = 10; $i >= 1; $i--){
    echo "Vòng lặp " . $i . "<br>";
}