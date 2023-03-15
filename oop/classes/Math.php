<?php
class Math {

    private $propertyA = 123;

    private $propertyB;

    public function getNumberA() {
        return $this->propertyA;
    }

    // Phương thức __get() cho phép lấy các thuộc tính không được phép truy cập
    public function __get($property) {
        return $this->$property;
    }

    public function setNumberB($numberB) {
        return $this->propertyB = $numberB;
    }

    // Phương thức __set() cho phép gán thuộc tính không được phép truy cập
    public function __set($property, $value) {
        return $this->$property = $value;
    }

    // Phương thức __call() cho phép gọi phương thức không tồn tại
    public function __call($method, $argumentsArr) {
        echo 'Phương thứ <b>'. $method .'</b> không tồn tại <br>';
        if(!empty($argumentsArr)) {
            echo 'Tham số bao gồm: ' . implode(',', $argumentsArr);
        }
    }

    // Phương thức __callStatic() cho phép gọi phương thức không tồn tại
    public static function __callStatic($method, $argumentsArr) {
        echo 'Phương thứ <b>'. $method .'</b> không tồn tại <br>';
        if(!empty($argumentsArr)) {
            echo 'Tham số bao gồm: ' . implode(',', $argumentsArr);
        }
    }

    public function sqrt($number) {
        return sqrt($number);
    }
}