<?php

// Định nghĩa abstract class
abstract class AbstractClass
{
    protected $msg;

    const _DB_INFO = ['localhost', 'root' , '', 'unicode'];

    public function getMessage() {
        return $this->msg;
    }

    //Phương thức abstract class chỉ khai báo, và phạm vi truy cập chỉ có protected, public
    abstract public function add ();

    //Phương thức abstract class
    abstract public function update ();

    //Phương thức abstract class
    abstract public function delete ();

    //Phương thức abstract class
    abstract public function show ();
}