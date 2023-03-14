<?php

class Database {

    public $table;

    public function __construct() {
        echo 'Kết nối database <br>';
    }

    public function fetch() {
        echo 'Lấy dữ liệu từ bảng: '. $this->table .'<br>';
    }

    public function methodParent() {
        echo __METHOD__ . '<br>';
        // truy cập tới phương thức của lớp con
        // Với điều kiện: khởi tạo đối tượng từ lớp con
        $this->methodChildren();
    }
}
