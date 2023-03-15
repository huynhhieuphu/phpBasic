<?php
class Post {

    // Đa kế thừa
    //use Database, Business;

    // Kế thừa lồng nhau
    use Auth;

    // Dùng trạit cho phép class truy cập tất cả phạm vi private, protected, public
    // Dùng trait, class không được phép ghi đè lên thuôc tính

    public function __construct()
    {
        // Dùng phương thức trung gian (ghi đè thuộc tính)
        $this->hostname = 'locahost';
    }

    public function getAll() {
        echo 'Lấy tất cả dữ liệu bài viết';
        echo '<hr>';

        echo $this->connect();
        echo '<br>';
        echo $this->username;
        echo '<hr>';

        echo $this->hostname;
        echo '<hr>';

        echo $this->foo();
        echo '<hr>';

        echo $this->login();
    }

    // Dùng trait, vẫn cho phép ghi đè
    public function fetch()
    {
        //parent::fetch(); // LỖI: trait không phải quan hệ cha - con
        return 'Lấy dữ liệu (đang ghi đè phương thức của trait)';
    }

}