<?php
/**
 * Phân biệt path và url
 */

/**
 * PATH
 *
 * 1. path_file
 *
 * Hằng số __FILE__ : trả về đường dẫn đầy đủ và tên của tập tin PHP đang được thực thi
 */
$path_file = __FILE__;
echo $path_file . "<br>";

/**
 * 2. path_dir
 *
 * Hằng số __DIR__ : trả về đường dẫn đầy đủ và tên thư mục tập tin PHP đang được thực thi
 */
$path_dir = __DIR__;
echo $path_dir. "<br>";

/**
 * URL
 *
 * Cấu trúc url:
 *
 * https://vnexpress.net/vi-sao-gia-xang-hom-nay-khong-giam-4-500-dong-mot-lit-4490538.html
 *
 *   - Giao thức => https:// hoặc https://
 *   - Hostname (Domain) => vnexpress.net/
 *   - Path (path of url) => vi-sao-gia-xang-hom-nay-khong-giam-4-500-dong-mot-lit-4490538.html
 *   - Post
 */

