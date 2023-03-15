<?php
trait Auth {

    use Database, Business;

    public function login()
    {
        return 'phương thưc login từ trait Auth';
    }

}