<?php
$str = 'Hoc lap trinh PHP';

/**
 * - Bản chất của chuỗi là 1 mảng các ký tự
 * - Muốn truy cập bất kì ký tự nào trong chuỗi --> dùng cú pháp: $varName[index]
 * - index : là chỉ số đại diện cho ký tự nằm trong mảng. Chỉ số bắt đầu từ 0 (từ trái sang phải)
 */

echo $str[0] . "<br>";
echo $str[1] . "<br>";
echo $str[2] . "<br>";
echo $str[3] . "<hr>";

// Để truy cập hết tất cả ký tự trong chuỗi dùng vòng lặp
for($i = 0; $i < strlen($str); $i++) {
    echo $str[$i] . "<br>";
}
echo strlen($str) . "<hr>";

/**
 * Đối với trường hợp tiếng việt có dấu cần sử dụng 1 số hàm có tiền tố mb_
 * Ví dụ: mb_strlen(), mb_substr(), mb_strtolower(), mb_struplower()
 * Lưu ý: không phải hàm nào mb_ đều hỗ trợ
 */
$str2 = 'Học lập trình PHP';
echo strlen($str2) . "<br>";
echo mb_strlen($str2, 'UTF-8') . "<hr>";

for($i = 0; $i < strlen($str2); $i++) {
    echo $str2[$i] . "<br>";
}
echo "<hr>";

for($i = 0; $i < mb_strlen($str2); $i++) {
    echo mb_substr($str2, $i, 1, 'UTF-8') . "<br>";
}