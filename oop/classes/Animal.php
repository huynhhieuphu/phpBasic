<?php
class Animal {

    public static function render() {
//        return self::getName(); // self: chính class đang định nghĩa
        return static::getName(); // static: chính class đang được chỉnh định
        // từ khoá static dùng khi kế thừa
    }

    public static function getName() {
        return 'Đây là động vật';
    }

}