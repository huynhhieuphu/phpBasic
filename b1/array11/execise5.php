<?php
/**
 * Bài 5: Tìm thông tin khách hàng có tuổi nhỏ nhất (Mảng đa chiều)
 */

$customers = [
    [
        'name' => 'Thang',
        'age' => 10
    ],
    [
        'name' => 'Phu',
        'age' => 12
    ],
    [
        'name' => 'Hieu',
        'age' => 7
    ],
    [
        'name' => 'Quoc',
        'age' => 11
    ]
];

if(!empty($customers)) {
    // giả sử đây là khách hàng có tuổi nhỏ nhất
    $minAgeCustomer = ['name' => $customers[0]['name'], 'age' => $customers[0]['age']];
    $maxAgeCustomer = ['name' => $customers[0]['name'], 'age' => $customers[0]['age']];

    foreach ($customers as $customer) {
        if($minAgeCustomer['age'] >= $customer['age']) {
            $minAgeCustomer['age'] = $customer['age'];
            $minAgeCustomer['name'] = $customer['name'];
        }

        if($maxAgeCustomer['age'] <= $customer['age']) {
            $maxAgeCustomer['age'] = $customer['age'];
            $maxAgeCustomer['name'] = $customer['name'];
        }

    }


    echo "Khách hàng có tuổi nhỏ nhất: {$minAgeCustomer['name']} <br/>";
    echo "Khách hàng có tuổi lớn nhất: {$maxAgeCustomer['name']} <br/>";
}