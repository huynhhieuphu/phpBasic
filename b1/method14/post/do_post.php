<?php
/*if(isset($_POST)) {
    if(isset($_POST['username'])) {
        $username = $_POST['username'];
    }

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }

    echo 'Username: ' . $username . '<br>';
    echo 'Email: ' . $email . '<br>';
}*/

echo 'REQUEST_METHOD: ' . $_SERVER['REQUEST_METHOD'] . '<br>';
// kiểm tra phương thức POST bằng BIẾN TOÀN CỤC $_SERVER['REQUEST_METHOD']
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['username'])) {
        $username = $_POST['username'];
    }

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }

    echo 'Username: ' . $username . '<br>';
    echo 'Email: ' . $email . '<br>';
}

?>