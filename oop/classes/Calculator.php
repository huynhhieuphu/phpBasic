<?php

class Calculator {
    public $numberA;
    public $numberB;
    public $numberC;
    public $numberD;
    private $math;

    private $username;
    private $password;


    const _MSG_CONTENT = 'Kết quả là: |||VALUE|||';

    public function __construct($config = []) {
        // Hàm khởi tạo
        echo 'Hàm khởi tạo' . '<br>';

        // Gán giá trị vào thuộc tính.
        $this->numberD = 'Value numberD';

        // Gán đối tượng vào thuộc tính.
        $this->math = new Math();

        // lấy tham số truyền vào hàm khởi tạo.
        var_dump($config);
    }

//    // Tạo hàm khởi tạo bằng chính tên class
//    public function Calculator()
//    {
//        echo 'Hàm khởi tạo' . '<br>';
//    }

    public function setNumberA($numberA) {
        $this->numberA = $numberA;
    }

    public function getNumberA() {
        return $this->numberA;
    }

    public function setNumberB($numberB) {
        $this->numberB = $numberB;
    }

    public function getNumberB() {
        return $this->numberB;
    }

    public function setNumberC($numberC) {
        $this->numberC = $numberC;
    }

    public function getNumberC() {
        return $this->numberC;
    }

    public function setUserName($username) {
        $this->username = $username;
    }

    public function getUserName() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function showUserName() {
        return $this->showInfo('username', $this->username);
    }

    public function showPassword() {
        return $this->showInfo('password', $this->password);
    }

    private function showInfo($type, $value) {
        if($type == 'username') {
            echo 'Username: ' . $value . '<br>';
        } elseif ($type == 'password') {
            echo 'Password: ' . $value . '<br>';
        } else {
            echo 'Không hợp lệ' . '<br>';
        }
    }

    public function setParam($paramA, $paramB) {
        if($paramA == 0) {
            $paramA = $this->numberA;
        }
        if($paramB == 0) {
            $paramB = $this->numberB;
        }

        return ['paramA' => $paramA, 'paramB' => $paramB];
    }

    public function makeAdd($paramA = 0, $paramB = 0) {
//        if($paramA == 0) {
//            $paramA = $this->numberA;
//        }
//        if($paramA == 0) {
//            $paramB = $this->numberB;
//        }

        $param = $this->setParam($paramA, $paramB);
        $paramA = $param['paramA'];
        $paramB = $param['paramB'];

        return $paramA + $paramB;
    }

    public function makeMinus($paramA, $paramB) {
        return $paramA - $paramB;
    }

    public function makeMultiply($paramA, $paramB) {
        return $paramA * $paramB;
    }

    public function makeDivide($paramA, $paramB) {
        return $paramA / $paramB;
    }

    public function showResult($msg, $result) {
        return str_replace('|||VALUE|||', $result, $msg);
    }

    public function showClassName()
    {
        return 'Class: ' . __CLASS__;
    }

    public function __destruct()
    {
        // Hàm Huỷ
        echo 'Hàm huỷ' . '<br>';
    }

    public function sqrt($number) {
        if(is_numeric($number)) {
            return $this->math->sqrt($number);
        }
        return 0;
    }
}