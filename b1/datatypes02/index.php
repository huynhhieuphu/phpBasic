<?php
/*
 * CÁC HÀM XỬ LÝ VỀ BIẾN
 * */

$myString = 'lorem ipsum';
$myNumber = 10;
$myNumberTwo = 2.0;
$checking = true;
$myNull = null;

// hàm gettype(): lấy ra kiểu dữ liệu của biến
echo gettype($myString); // OUTPUT: string
echo '<br>';
echo gettype($myNumber); // OUTPUT: int
echo '<br>';
echo gettype($myNumberTwo); // OUTPUT: double
echo '<br>';
var_dump($myNumberTwo); // OUTPUT: float(2.0)
echo '<br>';
echo gettype($checking); // OUTPUT: boolean
echo '<br>';
echo gettype($myNull); // OUTPUT: null
echo '<hr>';

// *** Ép kiểu số nguyên
//$strNum = 'sdasda999dasdad'; //OUTPUT: 0
//$strNum = 'sdasda999'; //OUTPUT: 0
//$strNum = '999dasdad'; //OUTPUT: 999
$strNum = '999'; //OUTPUT: 999
$num = (int) $strNum;
var_dump($num);
echo '<hr>';

$myMoney = null; // lưu ý: '' == false == 0 == null về mặt giá trị đều bằng nhau
//*** Hàm empty() kiểm tra giá trị của biến có rỗng hay không ? KHÔNG có kiểm tra kiểu dữ liệu
if (empty($myEmpty)) {
    echo 'rong';
} else {
    echo 'khong rong';
}

echo '<br>';
//*** Hàm isset() kiểm tra biến đó tồn tài hay không ? khi biến đó được khai báo và không gán bằng null
if (isset($myMoney)) {
    echo 'ton tai';
} else {
    echo 'khong ton tai';
}
echo '<br>';

$numOne = '10'; // NUMBER STRING, đều kiện chuỗi phải là số
$numTwo = 20;
$numThree = $numOne + $numTwo;
var_dump($numThree); // OUTPUT: int(30)
echo '<br>';

// Trong javascript dấu cộng + vừa là phép toán học và vừa là phép gán
// để kiểm tra biến có phải số hay không dùng ? phủ định hàm isNaN

// Trong php dấu cộng + chỉ là phép toán học

//*** Hàm is_numeric() kiểm tra có phải số hoặc chuỗi số hay không?
if (is_numeric($numOne)) {
    echo 'la chuoi so';
} else {
    echo 'khong phai la chuoi so';
}
echo '<hr>';

/*
 * Toán tử và biểu thức
 * */

//*** Spaceship operator : so sánh 2 biểu thức.
//Nếu biểu thức bên trái ($a) lớn hơn biểu thức bên phải ($b), trả về 1.
//Nếu biểu thức bên trái ($a) nhỏ hơn biểu thức bên phải ($b), trả về -1.
//Nếu cả hai biểu thức bằng nhau, trả về 0.
$a = 10;
$b = 9;
$c = $a <=> $b;
echo $c;

echo '<br>';

//*** NULL Coalescing Operator
//Kiểm tra biến có tồn tại ? Nếu tồn tại lấy giá trị chính biến đó, ngược lại lấy giá trị biến bên phải.
$x = 10;
$z = 9;
$y = $z ?? $x; // isset($z) ? $z : $x;
echo $y;