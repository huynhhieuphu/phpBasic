<?php
/**
 * Chuỗi là gì
 * - Chuỗi là danh sách các ký tự nằm trong cặp dấu nháy đơn hoặc cặp dấu ngoặc kép.
 *
 */

// chuỗi nằm trong cặp dấu ngoặc kép
$str = 'Lorem ipsum dolor sit amet';
var_dump($str);

echo '<br>';

// chuỗi nằm trong cặp dấu ngoặc đơn
$str2 = "Ut enim ad minim veniam";
var_dump($str2);

// chuỗi có chứa thẻ html
$strHtml = '<p>Duis aute irure <a href="https://loremipsum.io/">Lorem Ipsum</a> in voluptate velit.</p>';
echo $strHtml;

echo "<br>";

// chuỗi được gán trong Hằng số
define('STR_KEY_API', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
echo STR_KEY_API;

echo '<hr>';

/**
 * Nguyên tắc với chuỗi
 */

$str3 = "Non diam \"phasellus vestibulum\" lorem sed risus.";
echo $str3;
echo "<br>";

$str4 = "Non diam 'phasellus vestibulum' lorem sed risus.";
echo $str4;
echo "<br>";

$str5 = 'Non diam "phasellus vestibulum" lorem sed risus.';
echo $str5;
echo "<br>";

$str5 = 'Non diam \'phasellus vestibulum\' lorem sed risus.';
echo $str5;
echo "<br>";

// Thông thường trong chuỗi có thẻ html, khuyên sử dụng cặp dấu ngoặc đơn,
// vì thuộc tính thẻ html thường dùng dấu ngoặc kép.
$strHtml2 = '<p>Duis aute irure <a href="https://loremipsum.io/">Lorem Ipsum</a> in voluptate velit.</p>';
echo $strHtml2;
echo "<br>";

/**
 * Nối chuỗi
 * - Để nối chuỗi trong PHP, chúng ta dùng dấu chấm .
 */
$html = '<select name="years">';
for($i=2020; $i<=2022; $i++){
    $html .=  '<option value="'. $i .'">Năm '. $i .'</option>';
}
$html .= '<select>';

echo $html;