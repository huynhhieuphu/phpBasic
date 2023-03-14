<?php
class Model extends Database {

    // Ghi đè thuộc tính của lớp Cha
    // public $table = 'testModel';

    public function __construct($table = null)
    {
        // Kế thừa toàn bộ code có trong hàm khởi tạo.
        parent::__construct();

        // Gán giá trị cho thuộc tính của lớp cha khi khởi tạo đối tượng lớp con
        //$this->table = $table;
    }

    public function getData() {
        // truy cập đến phương thức của lớp cha
        $this->fetch();
    }

    // Lưu ý khi đặt tên phương thức trùng với phương thức của lớp Cha không được dùng từ khoá $this
    // Vì sẽ hiểu lầm gọi lại chính phương thức đó (đệ quy)
    public function fetch()
    {
        // Dùng lại phương thức của lớp cha
        parent::fetch();
    }

    public function methodChildren() {
        echo __METHOD__ . '<br>';
    }

}