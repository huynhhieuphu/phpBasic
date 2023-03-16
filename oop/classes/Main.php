<?php

namespace App\Oop;

use App\Oop\Admin\Post as AdminPost;
//use App\Oop\Home\Post as HomePost;

// Trường hợp: có chung đường dẫn namespace chỉ khác tên class
use App\Oop\Home\{Post as HomePost, Product};

// Trường hợp: khởi tạo class có sẵn trong PHP (class có sẵn PHP không có namespace)
// Để sử dụng được class có sẵn trong PHP dùng ký tự gạch \ đặt phía trước
use \DateTime;

class Main {

    public function __construct()
    {
        $adminPost = new AdminPost();
        echo '<br>';
        $HomePost = new HomePost();
        echo '<br>';
        echo 'Sử dụng cả 2 class chung 1 class';
        echo '<hr>';

        $product = new Product();
        echo '<hr>';

        $date = new DateTime();
        var_dump($date);
        echo'<br>';

        // hoặc gán ký tự gạch \ trực tiếp vào class có sẵn PHP
        $ex = new \Exception();
        var_dump($ex);
    }

}