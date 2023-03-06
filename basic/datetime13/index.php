<?php
// 1. time() - Hàm sẽ trả về số giây tính từ thời điểm 00:00:00 1/1/1970 đến thời điểm hiện tại
$ts = time();
echo 'Timestamp:' . $ts . '<hr>';

// 2. strtotime() - Hàm chuyển chuỗi thời gian thành timestamp
$dateStr = '01/01/1970 00:00:00';
$ts2 = strtotime($dateStr);
echo 'Convert ' . $dateStr . ' to timestamp ' . $ts2 . '<br>';

$dateStr2 = '10:30:59 2023-Jan-09';
$ts3 = strtotime($dateStr2);
echo 'Convert ' . $dateStr2 . ' to timestamp ' . $ts3 . '<hr>';

// 3. strftime() - Hàm chuyển timestamp thành chuỗi thời gian
$ts4 = time();
echo 'Timestamp: ' . $ts4 . '<br>';
$dateTimeStr = strftime('%d-%m-%Y %H:%M:%S', $ts4);
var_dump($dateTimeStr);
echo '<hr>';

// 4. mktime() - Hàm trả về timestamp của thời gian định dạng
$dt4 = mktime(21, 54, 30, 02, 9, 2023);
echo 'Timestamp: ' . $dt4 . '<hr>';

// 5. microtime() - Hàm trả về timestamp bao gồm microsecond
echo 'Timestamp (microsecond): ' . microtime() . '<br>';
echo 'Timestamp (microsecond-true): ' . microtime(true) . '<hr>';

// 6. localtime() - Trả về mảng từ timestamp
$localtime = localtime(time(), true);
echo '<pre>';
print_r($localtime);
echo '</pre>';
/**
 * OUTPUT: Array
 * (
 * [tm_sec] => 23
 * [tm_min] => 46
 * [tm_hour] => 21
 * [tm_mday] => 11
 * [tm_mon] => 1
 * [tm_year] => 123
 * [tm_wday] => 6
 * [tm_yday] => 41
 * [tm_isdst] => 0
 * )
 */
echo 'years: ' . ($localtime['tm_year'] + 1900) . '<hr>';

// 7. idate() - trả về số nguyên từ timestamp (format)
echo idate('y') . '<hr>';

// 8. gmmktime() - Hàm trả về timestamp của thời gian định dạng (theo múi giờ 0 GTM)
$dt5 = gmmktime(21, 54, 30, 02, 9, 2023);
echo 'Timestamp: ' . $dt5 . '<hr>';

// 9. gmdate() - Hàm trả về chuỗi thời gian theo định dạng. (theo múi giờ 0 GTM)
$dt6 = gmdate('d/m/Y H:i:s');
echo $dt6 . '<hr>';

// 10. getdate() - Hàm này trả về mảng từ timestamp
$info = getdate();
echo "<pre>";
print_r($info);
echo "</pre>";
/**
 * OUTPUT: Array
 * (
 * [seconds] => 23
 * [minutes] => 46
 * [hours] => 21
 * [mday] => 11
 * [wday] => 6
 * [mon] => 2
 * [year] => 2023
 * [yday] => 41
 * [weekday] => Saturday
 * [month] => February
 * [0] => 1676126783
 * )
 */
echo '<hr>';

// 11. date() - Hàm trả về timestamp của thời gian định dạng
$dt7 = date('d/m/Y H:i:s');
echo $dt7 . '<hr>';