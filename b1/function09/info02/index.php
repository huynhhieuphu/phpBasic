<?php
/**
 * 1. Hàm return, hàm không return
 * 2. Biến cục bộ, biến toàn cục, biến tĩnh
 * 3. Tham biến, tham trị, tham số, tham chiếu
 */

// Hàm return
// 1. Hàm không có từ khoá return => Hàm không return
// 2. Hàm có từ khoá return khi kết thúc hàm => Hàm return (hàm có giá trị trả về)
// Nếu có từ khoá return được gọi ra => các câu lệnh phía dưới return sẽ không chạy.

// Hàm không có return
function makeTotal($a, $b) {
    $total = $a + $b;
    echo $total;
}

makeTotal(5, 10);
echo '<br>';

// Hàm có return
function makeMulti($a, $b) {
    $total = $a * $b;
    return $total; // return sẽ trả về giá trị.
    // Lưu ý: các câu lệnh dưới return sẽ không chạy.
}

$result = makeMulti(5, 10); // khi gọi hàm có return cần gán vào 1 biến.
echo $result;
echo '<br>';

// Trường hợp thường gặp
function getMessages($message = null) {
    if($message == null) {
        return; // tương đương: return null;
    }
    return $message;
}

$msg = setMessages();
var_dump($msg);
echo '<br>';
$msg2 = setMessages('Hello world');
echo $msg2;