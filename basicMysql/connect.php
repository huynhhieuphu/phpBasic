<?php
/**
 * Kết nối đến database mysql từ PHP
 */

$driver = 'mysql';
$host = 'localhost';
$dbname = 'db_php_basic';
$username = 'root';
$password = '';

try {
    $conn = new PDO($driver.':host='.$host.';dbname='.$dbname,$username,$password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected successfully';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}