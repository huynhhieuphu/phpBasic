<?php
/**
 * QUERY STRING: username=hieuphu&email=hieuphu@bincg.com&age=32
 *
 * Biến toàn cục $_GET
 */

//echo "<pre>";
//print_r($_GET);
//exit();

if(isset($_GET['username'])) {
    $username = $_GET['username'];
}

$_GET['email'] = 'huynhhieu.phu@gmail.com';

if(isset($_GET['email'])) {
    $email = $_GET['email'];
}

if(isset($_GET['age']) && is_numeric($_GET['age'])) {
    $age = $_GET['age'];
}

echo 'username : ' . $username . '<br>';
echo 'email : ' . $email . '<br>';
echo 'age : ' . $age;