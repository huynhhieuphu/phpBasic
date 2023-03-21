<?php
class Model extends Database {

    // Ghi đè thuộc tính của lớp Cha
    // public $table = 'testModel';

    public function __construct($table = null)
    {
        // Truy cập tới hàm khởi tạo của class cha.
        parent::__construct();

        // Gán giá trị cho thuộc tính của lớp cha khi khởi tạo đối tượng lớp con
        //$this->table = $table;
    }

    public function getData() {
        // Truy cập đến phương thức có trong lớp cha
        $this->fetch();
    }

    // TH: Tên phương thức lớp con trùng với phương thức của lớp Cha mà muốn truy cập tới phương thức class cha
    // không dùng từ khoá $this Vì sẽ hiểu lầm gọi lại chính phương thức đó (đệ quy)
    public function fetch()
    {
        // Dùng parent::methodName() để truy cập tới phương thức cha
        parent::fetch();
    }

    public function methodChildren() {
        echo __METHOD__ . '<br>';
    }

}