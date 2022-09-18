<?php
/**
 * Bài 1: Viết chương trình lấy username của 1 email
 *
 * Input: huynhhieu.phu@gmail.com
 * Output: huynhhieu.phu
 */

// Input
$email = 'huynhhieu.phu@gmail.com';

// Xử lý
$endEmail = strstr($email, '@');
$username = str_replace($endEmail, '', $email);


// Cách khác:
$username2 = strstr($email, '@', true);
// Sử dụng hàm strstr() với Tham số 3 là true --> trả về các ký tự đứng trước nó.

// Output
echo $username . "<br>";
echo $username2 . "<br>";
