<?php
/*
 * câu lệnh rẽ nhánh if - else
 * */

// *** câu lệnh if

$num = 1;
if ($num > 0) {
    echo $num . " lớn hơn 0";
}

echo "<br>";

// hoặc
$check = $num > 0;
if ($check) { // tương đương if($check == true)
    echo $num . " lớn hơn 0";
}

echo "<br>";

// Nếu chỉ có 1 dòng code có thể viết như sau
if ($num > 0) {
    echo $num . " lớn hơn 0";
}

echo "<br>";

// *** câu lệnh if - else

if ($num > 0) {
    echo $num . " lớn hơn 0";
} else {
    echo $num . " nhỏ hơn 0";
}

echo "<br>";

// *** câu lệnh if - elseif - else
$month = 8;

if ($month >= 1 || $month <= 3) {
    echo "quý 1";
} elseif ($month >= 4 || $month <= 6) {
    echo "quý 2";
} elseif ($month >= 7 || $month <= 9) {
    echo "quý 3";
} elseif ($month >= 10 || $month <= 12) {
    echo "quý 4";
} else {
    echo "error";
}

echo "<br>";

// *** câu lệnh if - else lồng nhau

$condition = true;
$condition2 = true;

if ($condition) {
    if ($condition2) {
        //code here
    } else {
        //code...
    }
} else {
    if(true) {
        //code...
    } else {
        //code...
    }
}
