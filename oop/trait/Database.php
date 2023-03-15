<?php
trait Database {

    public $hostname;
    private $username = 'root';

    private function connect() {
        return 'Kết nối database';
    }

    public function fetch() {
        return 'Đỗ dữ liệu';
    }

}