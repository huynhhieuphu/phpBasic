<?php
/**
 * Bài 5: Nhập vào đầy đủ tên 1 người dùng, viết chương tách Họ và Tên ra:
 * Input: Huỳnh Hiếu Phú
 * Output:
 * - Huỳnh Hiếu
 * - Phú
 */

// Input:
$fullName = 'Huỳnh Hiếu Phú';

// Handle
$posLastSpace = mb_strripos($fullName, ' ', 0, 'UTF-8');
$fullNameLen = mb_strlen($fullName, 'UTF-8') - ($posLastSpace + 1);
$firstName = mb_substr($fullName, $posLastSpace + 1, $fullNameLen, 'UTF-8');
$lastName = mb_substr($fullName, 0, $posLastSpace, 'UTF-8');

// Output:
echo 'Full Name: ' . $fullName . '<br>';
echo 'First Name: ' . $firstName . '<br>';
echo 'Last Name: ' . $lastName;