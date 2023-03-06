<?php
/**
 * Những điều cần biết xử lý thời gian
 * 1 - Timestamp (số giây - được tính từ 00:00:00 1/1/1970 đến thời điểm hiện tại)
 * 2 - Định dạng thời gian
 * https://www.php.net/manual/en/datetime.format.php
 */
echo date('d/m/Y H:i:s') . '<br>';
echo date('M-d-y h:i:s A') . '<hr>';

/**
 * 3 - Timezone (Múi giờ - mặc định dựa múi giờ server thiết lập)
 * https://www.php.net/manual/en/timezones.php
 */
date_default_timezone_set('Europe/London'); // thiết lập timezone
echo date_default_timezone_get(); // Trả về timezone
echo '<br>';
echo date('M-d-y h:i:s A') . '<hr>';

/**
 * 4 - Datetime Object (Đối tượng thời gian)
 * Thông thường hiển thị sẽ chuỗi thời gian (kiểu chuỗi), nhưng để xử lý thì chuyển sang định dạng timestamp (kiểu số)
 */

$str = date('M-d-y h:i:s A');
echo 'today: ' . $str . '<br>';
$ts = strtotime($str);
echo 'timestamp today: ' . $ts . '<br>';
$tomorrow = $ts + 86400;
echo 'tomorrow: ' . date('M-d-y h:i:s A', $tomorrow) . '<br>';