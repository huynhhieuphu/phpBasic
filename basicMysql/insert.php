<?php
require_once 'connect.php';

$student_name = 'Nguyễn Văn C';
$student_address = 'Hau Giang, Q6';
$student_phone = '+090 111 9999';
$student_email = 'nguyenvanc@test.com';


// Cách 1: Thực thi query bằng Hàm exec()

//$query = 'INSERT INTO php_mysql_student(student_name, student_address, student_phone, student_email)
//VALUES('.'\''.$student_name.'\''.', '.'\''.$student_address.'\''.', '.'\''.$student_phone.'\''.', '.'\''.$student_email.'\''.');';
//$conn->exec($query);

// Cách 2: Thực thi query bằng Hàm prepare() và execute()
// Tạo đối tượng statement để chuẩn bị thực thi sau đó bởi hàm execute

$query = 'INSERT INTO php_mysql_student(student_name, student_address, student_phone, student_email)
VALUES(:student_name, :student_address, :student_phone, :student_email)';

$stmt = $conn->prepare($query);

//$stmt->bindParam(':student_name', $student_name);
//$stmt->bindParam(':student_address', $student_address);
//$stmt->bindParam(':student_phone', $student_phone);
//$stmt->bindParam(':student_email', $student_email);
//$stmt->execute();

// hoặc
$paramArr = [
    'student_name' => $student_name,
    'student_address' => $student_address,
    'student_phone' => $student_phone,
    'student_email' => $student_email,
];
$stmt->execute($paramArr);


