<?php
/**
 * Bài 06: Tìm kiếm 1 giá trị bất kỳ trong mảng
 */

$customers = [
    [
        'name' => 'Phan Quang',
        'age' => 26
    ],
    [
        'name' => 'Đăng Khoa',
        'age' => 26
    ],
    [
        'name' => 'Tuấn Anh',
        'age' => 25
    ],
    [
        'name' => 'Anh Tuấn',
        'age' => 25
    ],
    [
        'name' => 'Dương Anh',
        'age' => 29
    ],
    [
        'name' => 'Vinh Quang',
        'age' => 28
    ]
];
$keyword = 'anh'; // từ khoá cần tìm kiếm
$result = []; // giả định kết quả

if(!empty($customers)) {
    // duyệt mảng
    foreach ($customers as $customer) {
        // so sánh tương đối
        // xử lý chuỗi
        $customerName = mb_strtolower($customer['name']);
        $checkSearch = mb_strpos($customerName, $keyword, null, 'UTF-8');
        if($checkSearch !== false) {
            $result[] = $customer;
            /*$result = $customer;
            break;*/
        }
    }
}

echo "<pre>";
print_r($result);
exit();

