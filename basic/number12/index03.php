<?php
$number = 8;

// Kiểm tra phải là số không? bằng hàm filter_var()
// Hàm filter_var() trả FALSE nếu không đúng, ngược lại đúng sẽ trả về giá trị.

//$checkNumber = filter_var($number, FILTER_VALIDATE_INT);

// Kiểm tra có phải số không ??? và kiểm tra số tối thiểu và tối đa được phép
$checkNumber = filter_var($number, FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1, 'max_range' => 10]
]);

// code tương đương
if(is_int($number) && !empty($number) && $number <= 10) {
    //TRUE
}

var_dump($checkNumber);

