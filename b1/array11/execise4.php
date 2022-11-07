<?php
/*
 * Bài 4: Tìm giá trị lớn nhất, nhỏ nhất của mảng 1 chiều
 */
$numbers = [20, 36, 14, 29, 11, 8, 10, 22];

if(!empty($numbers)) {
    // Kỹ thuật đặt lính canh
    $max = $numbers[0]; // Giả sử đây là giá trị lớn nhất là phần tử đâu tiên

    $min = [
        'key' => 0,
        'value' => $numbers[0]
    ]; // Giả sử đây là giá trị nhỏ nhất là phần tử đâu tiên

    foreach ($numbers as $key => $value) {
        if($max <= $value) {
            $max = $value;
        }

        if($min['value'] >= $value) {
            $min['value'] = $value;
            $min['key'] = $key;
        }
    }

    echo "Max => value: {$max} <br/>";
    echo "Min => index: {$min['key']} - value: {$min['value']} <hr/>";
}

/**
 * Nâng cao:
 * Trường hợp nếu mảng không tuần tự
 */

$numberArr = [
    'eleven' => 11,
    'nine' => 9,
    'twenty' => 20,
    'twenty-six' => 26,
    'fourteen' => 14,
    'twenty-tow' => 22,
    'nineteen' => 19
];

if(!empty($numberArr)) {
    // Tìm key và value giá trị đầu tiên
    $firstElement = null;
    foreach ($numberArr as $key => $value) {
        $firstElement['key'] = $key;
        $firstElement['value'] = $value;
        break;
    }

    $max = ['key' => $firstElement['key'], 'value' => $firstElement['value']];
    $min = ['key' => $firstElement['key'], 'value' => $firstElement['value']];

    foreach ($numberArr as $key => $value) {
        if($max['value'] <= $value) {
            $max['key'] = $key;
            $max['value'] = $value;
        }

        if($min['value'] >= $value) {
            $min['key'] = $key;
            $min['value'] = $value;
        }
    }

    echo "Max => index: {$max['key']} - value: {$max['value']} <br/>";
    echo "Min => index: {$min['key']} - value: {$min['value']} <br/>";
}


