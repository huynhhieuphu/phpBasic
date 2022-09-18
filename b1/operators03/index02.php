<?php
// *** Toán tử gán + Toán tử số học

// Toán tử += (cộng bằng)
$num = 10;
$num += 20; // $num = 10 + 20 = 30; OUTPUT: 30
var_dump($num);
echo '<br/>';

// Toán tử -= (trừ bằng)
$num2 = 20;
$num2 -= 10; // $num = 20 - 10 = 10; OUTPUT: 10
var_dump($num2);
echo '<br/>';

// Toán tử *= (nhân bằng)
$num3 = 5;
$num3 *= 10; // $num = 5 * 20 = 50; OUTPUT: 50
var_dump($num3);
echo '<br/>';

// Toán tử /= (chia bằng)
$num4 = 10;
$num4 /= 5; // $num = 10 / 5 = 2; OUTPUT: 2
var_dump($num4);
echo '<br/>';

// Toán tử %= (chia lấy dư bằng)
$num5 = 10;
$num5 %= 5; // $num = 10 % 5 = 0; OUTPUT: 0
var_dump($num5);
echo '<hr/>';

// *** Toán tử so sánh
// trả vể giá trị true/false

// TT So sánh < (nhỏ hơn), > (lớn hơn)
$a = 9;
$b = 10;
//$c = $a < $b; // OUTPUT: true;
$c = $a > $b; // OUTPUT: false;
var_dump($c);
echo '<br/>';

// TT So sánh <= (nhỏ hơn hoặc bằng), >= (lớn hơn hoặc bằng)
$a2 = 9;
$b2 = 10;
$c2 = $a2 <= $b2; // OUTPUT: true;
//$c2 = $a2 >= $b2; // OUTPUT: false;
var_dump($c2);
echo '<br/>';

// Khác nhau < > so với <= >=
// $x = 10;
// $y = 10;
// $z = $x <= $y; // OUTPUT: TRUE khi 2 giá trị bằng nhau đối với <= >=
// $z = $x >= $y; // OUTPUT: FALSE khi 2 giá trị bằng nhau đối với < >

// Toán tử == ( bằng nhau so sánh giá trị)
$a3 = 10;
$b3 = 10;
$c3 = $a3 == $b3; // OUTPUT: true;
echo "== ";
var_dump($c3);
echo '<br/>';

$a4 = '10';
$b4 = 10;
$c4 = $a4 == $b4; // OUTPUT: true;
echo "== ";
var_dump($c4);
echo '<br/>';

// Toán tử === (bằng nhau so sánh giá trị và kiểu dữ liệu)
$a6 = '10';
$b6 = 10;
$c6 = $a6 === $b6; // OUTPUT: false;
echo "=== ";
var_dump($c6);
echo '<br/>';

// Toán tử != (khác bằng nhau so sánh giá trị)
$a7 = 10;
$b7 = 10;
$c7 = $a7 != $b7; // OUTPUT: false;
echo "!= ";
var_dump($c7);
echo '<br/>';

$a8 = 9;
$b8 = 10;
$c8 = $a8 != $b8; // OUTPUT: true;
echo "!= ";
var_dump($c8);
echo '<br/>';

// Toán tử !== (khác bằng nhau so sánh giá trị và kiểu dữ liệu)
$a9 = '10';
$b9 = 10;
$c9 = $a9 !== $b9; // OUTPUT: true;
echo "!== ";
var_dump($c9);
echo '<hr/>';

// so sánh BẰNG ngược lại với KHÁC BẰNG

// *** Toán tử quan hệ (toán tử logic)

// Toán tử && (AND)
/*
 * - Cả biểu thức đúng khi tất cả đều đúng --> kết quả là TRUE
 * - 1 biểu thức con sai --> kết quả là FALSE
 * */

$check = true && true;
var_dump($check); //OUTPUT: true;
echo '<br/>';

$check2 = false && true;
var_dump($check2); //OUTPUT: false;
echo '<br/>';

$check3 = true && (true && false);
var_dump($check3); //OUTPUT: false;
echo '<br/>';

$check4 = true && (true && true);
var_dump($check4); //OUTPUT: true;
echo '<br/>';

// Toán tử || (AND)
/*
 * - Cả biểu thức đúng khi 1 biểu thức con đúng --> kết quả là TRUE
 * - Cả biểu thức sai khi tất cả biểu thức con sai --> kết quả là TRUE
 * */
$check5 = true || (true && false);
var_dump($check5); //OUTPUT: true;
echo '<br/>';

// Toán tử ! (phủ định)
/*
 * Phủ định lại giá trị true/false
 * */
$check6 = true;
var_dump(!$check6); //OUTPUT: false;
echo '<br/>';

$check7 = false;
var_dump(!$check7); //OUTPUT: true;
echo '<br/>';