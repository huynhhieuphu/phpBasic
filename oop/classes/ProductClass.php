<?php

class ProductClass extends AbstractClass {
    // kế thừa từ 1 abstract class phải khai báo lại các phương thức abstract
    // Khai báo lại các phương thức abstract
    public function add() {

    }

    public function update() {

    }

    public function delete() {

    }

    public function show() {

    }

    public function test() {
        //KHÔNG thể truy cập đến phương thức abstract
        //parent::show(); //LỖI
    }
}