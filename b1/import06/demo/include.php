<?php
/**
 * Cú pháp include
 * 1. include 'path_to_php_file';
 * 2. include('path_to_php_file');
 *
 * Demo: Thứ tự import
 * - header
 * - content
 * - footer
 */


$path_dir = __DIR__ . '/../partials'; // đây là đường dẫn tuyệt đối.
//$path_dir = '../include'; // Đây là dường dẫn tương đối.


// import header.php
// include $path_dir . '/header.php';
include_once $path_dir . '/header.php'; // include_once: chỉ import 1 file php.

// import content.php
include $path_dir . '/content.php';

echo "Đây là nội dung mới thêm vào <br>";

// import footer.php
include($path_dir . '/footer.php');
