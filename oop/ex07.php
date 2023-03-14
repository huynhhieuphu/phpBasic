<?php
require_once 'classes/Student.php';


// truy cập thuộc tính static
echo Student::$fullName;
echo '<br>';

// truy cập phương thức static
echo Student::info();
echo '<hr>';

$student = new Student();
echo $student->address;
echo '<br>';
echo $student->getAddress();
echo '<hr>';

/**
 * Truy cập thuộc tính tĩnh trong phương thức tĩnh và phương thức
 * dùng ClassName::$propertyName hoặc self::$propertyName
 *
 * Truy cập phương thức tĩnh trong phương thức tĩnh và phương thức
 * dùng ClassName::methodName() hoặc self::methodName(
 *
 * Truy cập phương thức trong phương thức tĩnh vẫn được bằng cách
 * 1. Khởi tạo trực tiếp
 * 2. Gán $this vào thuộc tính tĩnh, định nghĩa trong hàm __constuct
 *
 */
echo Student::getFullName();
echo '<br>';
echo Student::showAge();
echo '<hr>';


echo $student->getPhone();
echo '<br>';
echo $student->showName();
echo '<hr>';

echo Student::showPhone();
echo '<br>';