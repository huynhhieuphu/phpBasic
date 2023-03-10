<?php
require_once 'connect.php';

$student_id = 4;
$student_name = 'Tran Minh T';

//$query = 'UPDATE php_mysql_student SET student_name = :STUDENT_NAME WHERE student_id = :STUDENT_ID;';
//$stmt = $conn->prepare($query);
//$stmt->bindParam('STUDENT_NAME', $student_name);
//$stmt->bindParam('STUDENT_ID', $student_id);
//$stmt->execute();

//hoặc

$query = 'UPDATE php_mysql_student SET student_name =? WHERE student_id =? ;';
$stmt = $conn->prepare($query);
$stmt->execute([$student_name, $student_id]);