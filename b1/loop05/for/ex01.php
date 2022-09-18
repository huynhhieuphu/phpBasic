<?php
/**
 * Hiển thị số chẵn và số lẻ trong dãy số từ 1 - 100
 */

$startIndex = 1;
$endIndex = 1;

$resultEven = null; // kết quả số chẵn
$resultOdd = null; // kết quả số lẻ

$countEven = 0; // đếm số chẵn
$countOdd = 0; // đếm số lẻ

for($index = $startIndex; $index <= $endIndex; $index++){
    // kiểm tra chẵn lẻ
    if($index % 2 == 0){
//        echo $index . " Số chẵn <br>";
        $resultEven .= $index . " ";
        $countEven++;
    }else{
//        echo $index . " Số lẻ <br>";
        $resultOdd .= $index . " ";
        $countOdd++;
    }
}
if($countEven > 0) {
    echo "Tìm thấy {$countEven} Số chẵn bao gồm: " . $resultEven . "<br>";
}else{
    echo "Không tìm thấy <br>";
}

if($countOdd > 0) {
    echo "Tìm thấy {$countOdd} Số lẻ bao gồm: " . $resultOdd . "<br>";
}else{
    echo "Không tìm thấy <br>";
}