<?php
date_default_timezone_set('UTC');

/**
 * Giới thiệu object timezone và object datetime
 *
 * Hàm khởi tạo object timezone
 */
$timezoneObj = timezone_open('Asia/Ho_Chi_Minh');
var_dump($timezoneObj);
echo '<hr>';

/**
 * Hàm khởi tạo object datetime
 */
$datetimeObj = date_create('2023-02-10 12:59:00'); // tham số time phải đúng định dạng nếu không đúng định dạng sẽ trả về false
var_dump($datetimeObj);
echo '<br>';

$datetimeObj2 = date_create(date('Y-m-d H:i:s'));
var_dump($datetimeObj2);
echo '<br>';

$datetimeObj3 = date_create(null, $timezoneObj);
var_dump($datetimeObj3);
echo '<hr>';

/**
 * Chú ý: hàm date_create() sử dụng rất là nhiều để chuyển định dạng thời gian hoặc cần tính toán
 * Ví dụ: lấy ngày hôm nay tính ra thời gian tiếp theo ngày kế tiếp, 2 ngày hoặc 1 tháng.
 * Nếu tính bằng chuỗi thời gian thì không chính xác sẽ có tháng 30, 31 ngày hoặc có năm tháng 2 có 29 ngày hoặc 28 ngày
 */

// hàm date_create_from_format() trả về đối tượng datetime được định dạng đã chỉ định
$datetimeObj4 = date_create_from_format('Y/m/d', '2023/02/10');
var_dump($datetimeObj4);
echo '<hr>';