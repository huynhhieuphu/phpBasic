<?php
/**
 * - Mảng đa chiều
 * - duyệt mảng đa chiều
 */

// Khai báo mảng đa chiều có sẵn dữ liệu
$customers = [
    [
        'name' => 'ti',
        'email' => 'ti@mail.com',
        'phone' => '+84932747123',
        'address' => 'Long Thanh'
    ],
    [
        'name' => 'day',
        'email' => 'day@mail.com',
        'phone' => '+84928927878',
        'address' => 'Ho Chi Minh'
    ],
    'status' => 'Success',
    30
];

/*echo "<pre>";
print_r($customers);
exit();*/


// Khai báo mảng đa chiều không có sẵn dữ liệu
$employees = [];

// set dữ liệu vào mảng đa chiều
$employees[] = [
    'name' => 'ti',
    'email' => 'ti@mail.com',
    'phone' => '+84932747123',
    'address' => 'Long Thanh'
];

$employees[] = [
    'name' => 'day',
    'email' => 'day@mail.com',
    'phone' => '+84928927878',
    'address' => 'Ho Chi Minh'
];

$employees['status'] = 'Success';

$employees[] = 30;

// set và edit dữ liệu mảng đa chiều
/**
 * Lưu ý
 * - Trường hợp set index rỗng $arr[] sẽ thêm mới
 * - Trường hợp set index tồn tại $arr[key] hoặc $arr[i] sẽ xảy ra case sau:
 *    - Trường hợp không tìm thấy index(key) sẽ thêm mới
 *    - Trường hợp tìm thấy index(key) sẽ thay đổi dữ liệu
 */
$employees['special'] = [
    'name' => 'quoc',
    'email' => 'quoc@mail.com',
    'phone' => '+84912345678',
    'address' => 'Ho Chi Minh'
];

// Thêm dữ liệu dựa vào index(key) đó.
$employees[][] = 'lu';
//$employees[][] = 'lu@mail.com';
$employees[3]['email'] = 'lu@mail.com';
$employees[3]['phone'] = '+84911111111';
$employees[3]['address'] = 'Vinh Chau';

$employees['special']['position'] = [
    'Front-End',
    'Back-End',
    'Tester'
];

/**
 * Tóm lại phải biết cấu trúc mảng thế nào rồi tuỳ trường hợp mà thêm hoặc sửa
 */


// Xoá dữ liệu mảng đa chiều - vẫn dùng hàm unset()


// Trường hợp xoá phần tử cuối mà không biết index cuối cùng là bao nhiêu thì logic xử lý.
$lastPositionIndex = count($employees['special']['position']) - 1;
unset($employees['special']['position'][$lastPositionIndex]);


/*echo "<pre>";
print_r($employees);
exit();*/

/**
 * Duyệt mảng đa chiều
 * Cơ bản duyệt từ ngoài vào trong
 */

if(!empty($employees) && is_array($employees)) {
    foreach($employees as $item) {
        if(is_array($item)) {
            if(!empty($item)) {
                echo '<strong>Thông tin KH:</strong><br>';
                foreach ($item as $arrSub) {
                    if(is_array($arrSub)) {
                        if(!empty($arrSub)) {
                            echo '<em>Vị trí:</em>';
                            echo '<ul>';
                            foreach ($arrSub as $position) {
                                echo '<li>' .  $position . '</li>';
                            }
                            echo '</ul>';
                        }
                    } else {
                        echo $arrSub . '<br>';
                    }
                }
                echo '<hr>';
            }
        } else {
            echo $item . '<hr>';
        }
    }
}



