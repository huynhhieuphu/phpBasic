<?php
/*
 * Biểu thức và toán tử
 * */

$a = 5;
$b = 10;
$total = $a + $b + 20;
// Giải thích
// $total = $a + $b + 20; ==> biểu thức
// $total, $a, $b, 20 ==> toán hạng
// =, + ==> toán tử

// *** Toán tử gán

// Toán tử = (phép gán)
$age = 30; // cú pháp: ten_bien = gia_tri;
const LIMIT_ROWS = 10; // ten_hang_so = giá_tri;

// Toán tử .= (phép gán kết hợp nối chuỗi)
$output1 = "<ul>"."<li>menu 1</li>"."<li>menu 2</li>"."<li>menu 3</li>"."</ul>";
echo $output1;

$output2 = "<ul>";
$output2 .= "<li>menu 1</li>";
$output2 .= "<li>menu 2</li>";
$output2 .= "<li>menu 3</li>";
$output2 .= "</ul>";
echo $output2;
echo '<hr>';

// *** Toán tử số học

// phép cộng (+)
$num1 = 10;
$num2 = 5;
$result1 = $num1 + $num2; //OUTPUT: 15
echo $result1 . "<br>";

// phép trừ (-)
$num3 = 10;
$num4 = 5;
$result2 = $num3 - $num4; //OUTPUT: 5
echo $result2 . "<br>";

// phép nhân (*)
$num5 = 10;
$num6 = 5;
$result3 = $num5 * $num6; //OUTPUT: 50
echo $result3 . "<br>";

// phép chia (/)
$num7 = 10;
$num8 = 5;
$result4 = $num7 / $num8; //OUTPUT: 2
echo $result4 . "<br>";

// phép chia lấy phần dư (%)
$num9 = 10;
$num10 = 5;
$result5 = $num9 % $num10; //OUTPUT: 0
echo $result5 . "<br>";

// phép tính luỹ thừa (**)
$coSo = 9; // cơ số
$soMu = 2; // số mũ
$result6 = $coSo ** $soMu; //OUTPUT: 9^2 = 81
echo $result6 . "<hr>";

// Toán tử tăng 1 đơn vị (++)
$count = 0;
//$count = $count + 1;
//echo $count; //OUTPUT: 1

// $count++;
//echo $count; //OUTPUT: 1

// ++$count;
//echo $count; //OUTPUT: 1

echo "<hr>";

$count = 0;
$result = $count++; // $result = $count, $count = $count + 1; => Gán xong mới tăng lên 1 đơn vị
echo $count . "<br>"; // OUTPUT: 1
echo $result . "<br>"; // OUTPUT: 0

$count2 = 0;
$result2 = ++$count2; // $count = $count + 1; $result = $count; => Tăng lên 1 đơn vị rồi mới gán
echo $count2 . "<br>"; // OUTPUT: 1
echo $result2 . "<br>"; // OUTPUT: 1

// Toán tử giảm 1 đơn vị (--) => tương tự (++) chỉ giảm 1 đơn vị
