<?php
require_once 'connect.php';


//Đổ tất cả dữ liệu
//$query = 'SELECT * FROM php_mysql_student;';
//// Hàm query dùng để chạy câu lệnh sql (thường là select)
//$stmt = $conn->query($query);
//$data = $stmt->fetchAll();


// Lấy 1 dữ liệu
$student_id = 1;
$query = 'SELECT * FROM php_mysql_student WHERE student_id = :STUDENT_ID;';
$stmt = $conn->prepare($query);
$stmt->bindParam(':STUDENT_ID', $student_id);
$stmt->execute();

$data = $stmt->fetch();

echo '<pre>';
print_r($data);
echo '</pre>';
exit();