<?php
/**
 * Tham số hình thức, Tham số thực, tham chiếu
 *
 * - Tham số hình thức được sử dụng khi được định nghĩa hàm.
 *
 * - Tham số thực được sử dụng khi gọi hàm (không thay đổi giá trị truyền vào)
 *
 * - Tham chiếu làm thay đổi giá trị của biến truyền vào.
 */

// *** Tham số hình thức ***
function makeTotal($a, $b) { // $a, $b được gọi là tham số hình thức
    return $a + $b;
}

// *** Tham số thực ***
$num = 5;
$num2 = 10;
$result = makeTotal($num, $num2); // $num, $num2 được gọi là tham số thực
echo $result;
echo '<hr>';

// *** Truyền bằng tham chiếu ***
// Tham chiếu có ký tự & (AND). Ví dụ: &$message
$msg = 'Hello';
echo $msg . '<br>'; // OUTPUT: 'Hello';
function setMessages(&$message = null) {
    $message .= 'World';
    return $message;
}
echo setMessages($msg) . '<br>'; // OUTPUT: 'HelloWorld';

// biến truyền vào bị thay đổi giá trị vì truyền bằng tham chiếu.
echo $msg . '<hr>'; // OUTPUT: 'HelloWorld';



//***** NÂNG CAO *****

// $ten_bien = &ten_bien_khac;
$a = 1;  // $a = 1;
$b = $a; // $b = 1;

$b = &$a; // $a = 10; $b gán biến $a (kèm theo ký tự & AND)
$b = 10; // $b = 10;

echo $a . '<br>'; // OUTPUT: 10;
echo $b . '<hr>'; // OUTPUT: 10;

// function &ten_ham() {
//    //do something...
// }
function &hello() {
    static $hello = 'lorem'; // bắt buộc phải sử dụng biến static
    return $hello;
}

$x = &hello(); // $x = lorem
$x = 'ipsum'; // $x = ipsum

echo $x . '<br>'; // OUTPUT: ipsum
echo hello(); // OUTPUT: ipsum





