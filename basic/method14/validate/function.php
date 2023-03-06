<?php

$messageArr = [
    1 => 'Thêm thành công',
    2 => 'Xoá thành công',
    3 => 'Cập nhật thành công'
];

function redirect($url) {
    header('Location: ' . $url);
    exit();
}

function getMessage($code) {
    global $messageArr;
    if(array_key_exists($code, $messageArr)) {
        return $messageArr[$code];
    }
}

function makeChecked($value) {
    if(!empty($_GET['sothich'])) {
        $soThichArr = $_GET['sothich'];
    } else {
        $soThichArr = [];
    }

    $checked = false;
    if(!empty($_POST['soThich']) && in_array($value, $_POST['soThich'])) {
        $checked = 'checked';
    } else if(!empty($soThichArr) && in_array($value, $soThichArr)) {
        $checked = 'checked';
    }

    return $checked;
}