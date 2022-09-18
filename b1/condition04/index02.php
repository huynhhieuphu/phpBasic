<?php
/*
 * Câu lệnh rẽ nhánh switch - case
 * */

//*** switch - case

$num = 7;
switch ($num) { // $num là biến hoặc biểu thức để so sánh == các giá trị trong case
    case 1:
        echo "Chủ nhật";
        break; // từ khoá break dùng để dừng dòng code chạy
    case 2:
        echo "Thứ hai";
        break;
    case 3:
        echo "Thứ ba";
        break;
    case 4:
        echo "Thứ tư";
        break;
    case 5:
        echo "Thứ năm";
        break;
    case 6:
        echo "Thứ sáu";
        break;
    case 7:
        echo "Thứ bảy";
        break;
    default: // từ khoá default chạy khi các giá trị case không thoả điều kiện, tuỳ trường hợp có thể default hoặc không dùng
        echo "Không hợp lệ";
        break;
}
echo '<hr>';


// *** switch - case kết hợp if - else

// Bài tập: kiểm tra số ngày trong tháng
// INPUT: số tháng, số năm
// OUTPUT: số ngày
// Tháng có 31 ngày: 4,6,9,11
// Tháng có 30 ngày: 1,3,5,7,8,10,12
// Tháng có 28,29 ngày: 2

$month = 2;
$year = 2022;

switch($month) {
    case 2:
        if($year % 4 === 0 || $year % 400 === 0){
            echo "Tháng $month có 29 ngày";
        }else{
            echo "Tháng $month có 28 ngày";
        }
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "Tháng $month có 31 ngày";
        break;
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "Tháng có 30 ngày";
        break;
    default:
        echo "giá trị không hợp";
        break;
}