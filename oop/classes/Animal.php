<?php
class Animal {

    public static function render() {
//        return self::getName();
        return static::getName();
        // từ khoá static dùng khi kế thừa
    }

    public static function getName() {
        return 'Đây là động vật';
    }

}