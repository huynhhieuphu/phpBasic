<?php
namespace App\Oop;

class DB {

    static private $db;

    public function __construct() {
        self::$db = $this;
    }

    public function table($table) {
        echo ' FROM ' . $table;

        //return $this;
        return self::$db;
    }

    public function select($select = '*') {
        echo 'SELECT ' . $select;

        //return $this;
        return self::$db;
    }

    public function where($field, $compare, $value) {
        echo ' WHERE ' . $field . ' ' . $compare . ' ' . $value;

        //return $this;
        return self::$db;
    }

    public function get() {
        echo ' RUN';

        //return $this;
        return self::$db;
    }

}