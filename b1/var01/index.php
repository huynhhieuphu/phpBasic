<?php
/**
 * <?php //thẻ mở php, bắt buộc phải có
 *    //code php
 * <? //thẻ đóng, có thể không cần nếu chỉ code duy nhất php, còn nếu có các ngôn ngữ khác thì bắt buộc phải có, để hiểu rằng chứa php bên trong đó
 * */

// echo 'Hello world';

/**
 * KHAI BÁO BIẾN
 * */
$myName = 'tony teo'; // bắt đầu khai báo bằng dấu đô la $, ký tự đầu tiên KHÔNG phải là số hoặc khoảng trắng
// biến phân biệt chữ hoa chữ thường
$MyName = 'lorem ipsum';
$my_name = 'lorem ipsum 2';

//*** Comment code

// comment 1 dòng code
/*
 * comment 1 khối code
 * */

//*** In giá trị
echo $my_name; // từ khoá echo: dùng in ra giá trị (chuỗi, số)
echo "<br>";

print_r(array('cam', 'buoi', 'quyt')); // hàm print_r: dùng in ra mảng hoặc object
echo "<br>";

var_dump(array(
    'cam',
    'buoi',
    'quyt'
)); // hàm var_dump: dùng để in ra kiểu dữ liệu và giá trị (bao gồm chuỗi, số, mảng, object)
echo '<hr />';

//*** Nối chuỗi
$str_1 = 'Học ngôn ngữ lập trình ';
$str_2 = 'PHP Cơ bản';
echo $str_1 . $str_2; // dùng nháy đơn - nối chuối bằng dấu chấm
echo '<br>';

$str = 'ngôn ngữ';
$str_3 = 'Học ' . $str . 'lập trình PHP Nâng Cao';
echo $str_3;
echo "<br>";

$str_4 = "Học $str truy vấn SQL"; // dùng nháy kép - hiểu biến nằm trong chuỗi (biến trong chuỗi phải nằm cách nhau).
echo $str_4;
echo "<br>";

$str_5 = "Học{$str}lập trình hướng đối tượng"; // dấu ngoặc kép + cặp ngoặc nhọn (biến không nằm cách nhau vẫn hiểu).
echo $str_5;
echo "<br>";

// Dùng dấu nháy kép bên ngoài thì bên trong dấu nháy đơn. Ngược lại, dùng dấu nháy đơn bên ngoài thì bên trong dấu nháy kép
$str_6 = "Học 'PHP' cơ bản";
echo $str_6 . "<br>";
$str_7 = 'Học "PHP" cơ bản';
echo $str_7 . "<br>";
// Trường hợp không muốn thay đổi thì dấu gạch chéo \" hoặc \'
$str_8 = "Học \"PHP\" cơ bản";
echo $str_8 . "<hr>";

//*** Kỹ thuật biến tham chiếu tới giá trị của biến khác - cú pháp $$tenBien;
$a = 'demo'; // giá trị của biến lại là tên của biến khác.
$demo = 'lorem ipsum 3';
echo $$a; //OUTPUT: lorem ipsum 3
echo '<hr>';

//*** Khai báo HẰNG SỐ
// khai báo hằng số javascript dùng từ khóa const PI = 3.14
// còn trong PHP có 2 cách:
// cách 1: từ khóa const
const PI = 3.14;
// cách 2: dùng hàm define('TEN_HANG_SO', gia tri hang so);
define('LIMIT_ROWS', 3);

// lưu ý: biến HẰNG SỐ không cần có dấu đô la $
echo PI;
echo '<br>';
echo LIMIT_ROWS;

// Khác nhau giữa const và define() là const sử dụng được bên trong class, còn define thì không
echo '<br>';
//*** hàm defined('BIEN_HS') kiểm tra hằng số có định nghĩa chưa ?
if (defined('PI')) {
    echo 'ton tai HANG SO';
} else {
    echo 'khong ton tai HANG SO';
}
echo '<br>';

// Ví dụ:
!defined('TEST_MODE_PASSWORD') && define('TEST_MODE_PASSWORD', true);
var_dump(TEST_MODE_PASSWORD); // OUTPUT: true;
echo '<hr>';

// code PHP có thể render HTML,CSS,JS đều đc
echo '<br>';
echo '<h1>Learning PHP</h1>';
echo '<hr>';