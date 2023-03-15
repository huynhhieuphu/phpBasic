<?php
/**
 * class - object
 * truy cập thuộc tính, phương thức và HẰNG SỐ bên ngoài class
 */

// Khai báo lớp
class Calculator {

    //Khai báo thuộc tính
    var $numberA = 1; //Sử dụng từ khoá var để khai báo thuộc tính, tương đương với pham vi truy cập public
    public $numberB = 2;

    //Khai báo hằng số
    const _MSG_CONTENT = 'Kết quả là: |||VALUE|||';

    //khai báo phương thức
    public function makeAdd($paramA, $paramB) {
        $result = $paramA + $paramB;
        return $result;
    }
    //khai báo phương thức pham vi truy cập public (ngắn gọn)
    function makeMinus($paramA, $paramB) {
        $result = $paramA - $paramB;
        return $result;
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

    public function showResultShort($result) {
        //Truy cập hằng số
//        $msg = Calculator::_MSG_CONTENT;
//        $msg = self::_MSG_CONTENT;
        $msg = $this::_MSG_CONTENT;

        // truy cập phương thức trong lớp
        $this->showResult($msg, $result);
    }
}


// Khởi tạo đối tượng
$calc = new Calculator();

// Truy cập thuộc tính
$calc->numberA;
$calc->numberB;

//Gán giá trị thuộc tính
$calc->numberA = 10;
$calc->numberB = 20;

//Truy cập hằng số
$calc::_MSG_CONTENT;
//hoặc
Calculator::_MSG_CONTENT;


//Truy cập phương thức
$result = $calc->makeAdd(5, 15);
echo $result;
echo '<br>';
echo $calc->makeAdd($calc->numberA, $calc->numberB);
echo '<br>';
echo $calc->showResult($calc::_MSG_CONTENT, $result);
echo '<br>';
echo $calc->showResultShort($result);
echo '<br>';



