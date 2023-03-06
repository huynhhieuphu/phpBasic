<?php
/**
 * Cú pháp require
 * 1. require 'path_to_php_file';
 * 2. require('path_to_php_file');
 */

$path_dir = __DIR__ . '/../partials';

// import header.php
//require $path_dir . '/header.php';
require_once $path_dir . '/header.php'; // require_once: chỉ import 1 file php.

// import content.php
require $path_dir . '/content.php';

echo "Đây là nội dung mới thêm vào <br>";

// import footer.php
require($path_dir . '/footer.php');

/** Sự khác nhau giữa include, include_once và require, require_once
 * - include, include_once: Nếu lỗi => chương trình vẫn Chạy.
 * - require, require_once: Nếu lỗi => chương trình vẫn Dừng.
 */