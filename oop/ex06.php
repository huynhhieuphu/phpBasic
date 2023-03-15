<?php
/*
 * Kế thừa
 */
require_once 'classes/Database.php';
require_once 'classes/Model.php';

// Khởi tạo đối tượng từ lớp con
$model = new Model();

// Truy cập thuộc tính từ lớp cha
//$model->table = 'users';

//$model->getData();

$model->fetch();

//echo '<hr>';
// Truy cập phương thức của lớp cha
//$model->methodParent();

//// Khởi tạo đối tượng từ lớp cha
//$db = new Database();
//$db->methodParent(); // Lỗi :do phương thức con chưa được định nghĩa,
//// chỉ khi khởi tạo đối tượng từ lớp con truy cập vào mới chạy.

//echo '<hr>';
//$postModel = new Model('post');
//$postModel->getData();

