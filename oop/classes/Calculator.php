<?php

class Calculator {
    public $numberA;
    public $numberB;
    const _MSG_CONTENT = 'Kết quả là: |||VALUE|||';

    public function setNumberA($param) {
        $this->numberA = $param;
    }

    public function getNumberA() {
        return $this->numberA;
    }

    public function setNumberB($param) {
        $this->numberB = $param;
    }

    public function getNumberB() {
        return $this->numberB;
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
}