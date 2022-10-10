<?php
// Mảng

/**
 * Khai báo mảng
 */

$cars = ['Honda', 'BMW', 'Toyota']; // cách 1: từ phiên bản 5.4 trở đi
//$cars = array(); // cách 2

/**
 * Hiển thị mảng
 */
// var_dump($cars); // cách 1

/*echo '<pre>';
print_r($cars); // cách 2: kết hợp tag <pre> để dễ nhìn.
echo '</pre>';*/

$customer = [
    'id' => 1,
    'fullname' => 'Huynh Hieu Phu',
    'email' => 'hieuphu@bincg.com',
    'isMale' => true,
    'phone' => '+8493503989',
    'address' => null
];

/*echo '<pre>';
var_dump($customer);
echo '</pre>';*/

// Lưu ý: về index trong mảng
// Mảng tuần tự sẽ có index bắt đầu 0.
$arr = [
    'index: 0',
    'key' => 'value',
    10 => 'key = 10',
    'index = 11'
];
// khi set index là số, index sẽ dựa vào index gần nhất tăng tiếp.

/*echo '<pre>';
print_r($arr);
echo '</pre>';*/

/**
 * Thêm phần tử vào mảng
 */

$students = [];

$students[] = 'Phu';
$students[10] = 'Quoc';
$students[] = 'Thang';
$students['name'] = 'Hieu';

/**
 * Sửa giá trị phẩn tử mảng
 */
$students[11] = 'Cao Thang';
$students['name'] = 'Ho Quang Hieu';

//Nếu không tồn tại key hoặc để rỗng key, sẽ tự hiểu thêm mới
$students[] = 'lorem ipsum';
$students['address'] = 'Minh Phung';

/**
 * Xoá phần tử trong mảng
 * Hàm unset() xoá biến
 */

// Xoá giá trị theo key
unset($students['name']);
unset($students[0]); // khi xoá key tuần tự - sẽ KHÔNG tự reset key
print_r($students);
echo '<br>';

// Xoá biến
unset($students);

if(isset($students)) {
    echo 'Ton tai';
} else {
    echo 'Khong ton tai';
}
echo '<hr>';

/**
 * Duyệt mảng tuần tự
 */

$arrTuanTu = ['kim','moc','hoa','tho','thuy'];
$lenArrTuanTu = sizeof($arrTuanTu);

for($index = 0; $index < $lenArrTuanTu; $index++) {
    echo $arrTuanTu[$index] . '<br>';
}
echo '<hr>';

/**
 * Duyệt mảng không tuần tự
 */

$customer2 = [
    'id' => 1,
    'fullname' => 'Huynh Hieu Phu',
    'email' => 'hieuphu@bincg.com',
    'isMale' => true,
    'phone' => '+8493503989',
    'address' => null
];

foreach($customer2 as $key => $value) {
    echo 'key: ' . $key . ' - value: ' . $value . '<br>';
}
echo '<hr>';

/**
 * Truy cập từng giá trị phần tử
 */
echo 'Tên đầy đủ: ' . $customer2['fullname'];