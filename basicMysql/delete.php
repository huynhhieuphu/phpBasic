<?php
require_once 'connect.php';

$student_id = 3;
$query = 'DELETE FROM php_mysql_student WHERE student_id =?;';
$stmt = $conn->prepare($query);
$stmt->execute([$student_id]);