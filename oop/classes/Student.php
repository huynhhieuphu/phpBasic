<?php
class Student {
    public static $fullName = 'Hieu Phu';
    public static $age = 32;
    public $address = 'Q8, Ho Chi Minh';
    public static $phone = '+84 93 503 9889';

    public static $student;

    public function __construct() {
        self::$student = $this;
    }

    public static function info() {
        return 'Tôi là lập trình web';
    }

    public static function getFullName() {
        // ERROR: không thể dùng $this để truy cập đến thuộc tính Tĩnh
        //return 'Họ Tên: ' . $this->fullName;

        // Truy cập thuộc tính tĩnh
        // dùng Class::$varName
//        return 'Họ Tên: ' . Student::$fullName;
        // hoặc dùng self::$varName
        return 'Họ Tên: ' . self::$fullName;
    }

    public static function getAge() {
        return 'Tuổi: ' . self::$age;
    }

    public static function showAge() {
        // ERROR: không thể dùng $this để truy cập đến phương thức tĩnh
        //return $this->getAge();

        // Truy cập phương thức tĩnh
//        return Student::getAge();
        return self::getAge();
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhone() {
        return 'Số điện thoại:' . self::$phone;
    }

    public function showName() {
        return self::getFullName();
    }

    public static function showPhone()
    {
        //Cách 1: Khởi tạo đối tượng trực tiếp
        //return (new Student())->getPhone();
        //return (new self())->getPhone();
        // Cách 2: Gán giá trị $this vào trong thuộc tính tĩnh, định nghĩa trong hàm __contruct()
        return self::$student->getPhone();
    }
}