<?php
class Number {
    public static $count = 0;
    public $dem = 0;

    public function __construct() {
        // Mỗi lần khởi tạo mới đối tượng thuộc tính tĩnh sẽ thay đổi
        self::$count++;
        echo 'Giá trị Thuộc tính static là ' . self::$count . '<br>';

        // Còn đối thuộc tính
        $this->dem++;
        echo 'Giá trị Thuộc tính là ' . $this->dem . '<br>';

    }

}