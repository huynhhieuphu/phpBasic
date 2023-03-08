<?php

// set cookie
//setcookie('username', 'hieuphu');

// set cookie param expire (thiết lập thời gian sống cookie)
// setcookie('username', 'hieuphu', time() + 120); // 60s = 1minute

// set cookie param path (thiết lập đường dẫn cookie hoạt động)
//setcookie('username', 'hieuphu', time() + 3600, '/');
//setcookie('username', 'hieuphu', time() + 3600, '/phpbasic/basic02/');
//setcookie('username', 'hieuphu', time() + 3600, '/phpbasic/basic02/session/');



//echo "<pre>";
//print_r($_COOKIE);
//exit();


// get cookie
//var_dump($_COOKIE['username']);

if(isset($_COOKIE['username'])) {
    echo 'Tồn tại cookie: ' . $_COOKIE['username'];
} else {
    echo 'Không tồn tại cookie';
}

// delete cookie
// Lưu ý: khi xoá cookie phải điền đủ các tham số của cookie set trước đó mới xoá được.

//setcookie('username');

//setcookie('username', '', time() - 3600, '/');
//setcookie('username', '', time() - 3600, '/phpbasic/basic02/');
//setcookie('username', '', time() - 3600, '/phpbasic/basic02/session/');