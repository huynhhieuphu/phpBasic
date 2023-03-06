<?php
/**
 * Hàm isset()
 * - Kiểm tra biến có tồn tại hay không ?
 * - Biến mà gán giá trị NULL trả về kết quả FALSE
 */

//$checkVar = ''; // OUTPUT: TRUE
//$checkVar = 'lorem ipsum'; // OUTPUT: TRUE
//$checkVar = 0; // OUTPUT: TRUE
//$checkVar = 1; // OUTPUT: TRUE
//$checkVar = -2; // OUTPUT: TRUE
//$checkVar = array(); // OUTPUT: TRUE
//$checkVar = array('a', 'b', 'c'); // OUTPUT: TRUE

//$checkVar = null; // OUTPUT: FALSE;
if(isset($checkVar)) {
    var_dump($checkVar);
}
echo '<hr>';

/**
 * Hàm empty()
 * - Kiểm tra biến có giá trị rỗng không ?
 * - Trả về TRUE: nếu biến đó không tồn tại.
 * - Trả về TRUE với giá trị: chuỗi rỗng, 0, FALSE, null, array() rỗng, object rỗng
 */

//$checkEmpty = ''; //OUTPUT: TRUE
//$checkEmpty = 0; //OUTPUT: TRUE
//$checkEmpty = '0'; //OUTPUT: TRUE
//$checkEmpty = FALSE; //OUTPUT: TRUE
//$checkEmpty = array(); //OUTPUT: TRUE
//$checkEmpty = null; //OUTPUT: TRUE

$obj = new stdClass(); //OUTPUT: TRUE
//var_dump($obj);
$checkEmpty = (array) $obj; // Ép kiểu dữ liệu mảng

if(empty($checkEmpty)) {
    echo 'empty';
} else {
    echo 'not empty';
}