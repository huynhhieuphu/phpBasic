<?php
namespace App\Oop;

// Định nghĩa final class --> KHÔNG cho phép class khác kế thừa từ class final
//final class FinalDemo {
//    // body class
//}

class FinalDemo {

    public function foo() {
        echo 'phương thức foo';
    }

    // Định nghĩa final method -> Không cho phép ghi đè lên phương thức này
    final public function bar() {
        echo 'phương thức bar';
    }

}