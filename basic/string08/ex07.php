<?php
/**
 * Bài 7: Viết chương trình kiểm tra độ mạnh của mật khẩu
 * - Có độ dài tối thiểu là 6
 * - Chứa ít 1 chữ số 0-9
 * - Chứa ít 1 ký tự chữ cái in thường a-z
 * - Chứa ít 1 ký tự chữ cái in hoa A-Z
 * - Chứa ít 1 ký tự đặc biệt: !@#$%^&*()-+
 */

// Input

$password = "!23WNet4%^";
//$password = "ABCXYZ";
//$password = "abcxyz";
//$password = "ab@cxyz";


// Handle
$number = '1234567890';
$symbol = '!@#$%^&*()-+';

$checkLength = false;
$checkNumber = false;
$checkLowerAlpha = false;
$checkUpperAlpha = false;
$checkSymbol = false;

if(strlen($password) >= 6) {
    $checkLength = true;
};

for($i = 0; $i < strlen($password); $i++) {
    $char = substr($password, $i, 1);
    if(strpos($number, $char, 1) != false){
        $checkNumber = true;
    }
    if($char >= 'a' && $char <= 'z') {
        $checkLowerAlpha = true;
    }
    if($char >= 'A' && $char <= 'Z') {
        $checkUpperAlpha = true;
    }
    if(strpos($symbol, $char, 1) != false){
        $checkSymbol = true;
    }
}

// output
if($checkLength && $checkNumber && $checkLowerAlpha && $checkUpperAlpha && $checkSymbol) {
    echo 'Mật khẩu mạnh';
} else {
    echo 'Mật khẩu yếu';
}

