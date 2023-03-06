<?php
// Dùng hàm function_exists('ten_ham') : kiểm tra hàm có tồn tại không ?

if (!function_exists('makeTotal')) {
    // Định nghĩa hàm
    function makeTotal($a, $b)
    {
        $total = null;
        $total = $a + $b;
        echo 'Total: ' . $a . ' + ' . $b . ' = ' . $total;
    }
}

if (!function_exists('getMessages')) {
    // Định nghĩa hàm
    function getMessages()
    {
        echo 'Đây là thông báo';
    }
}

if (!function_exists('getNumber')) {
    function getNumber($number, $text = null) {
        /**
         * Lưu ý:
         *  - Nếu tham số nào được gán giá trị ban đầu thì truyền hay không truyền vào đều được,
         * nếu không truyền thì nó sẽ lấy giá trị ban đầu.
         *  - Nếu tham số KHÔNG gán trị nào thì BẮT BUỘC khi gọi hàm phải truyền tham trị vào.
         * nếu không truyền sẽ báo lỗi.
         */
        if($text != null) {
            echo $text . ':' . $number;
        } else {
            echo $number;
        }
        echo '<br>';
        // gọi hàm khác vào trong hàm
        // Không quan tâm thự tự định nghĩa hàm.
        setMessage('Gọi hàm setMessage() vào trong hàm getNumber()');
    }
}

if(!function_exists('buildMenu')) {
    function buildMenu($sub = false, $data) {
        /**
         * Lưu ý: Vị trí tham số bắt buộc (tham số không có giá trị ban đầu) và tham số không bắt buộc (tham số có giá trị ban đầu)
         *  - Trường hợp: Tham số KHÔNG bắt buộc đứng trước tham số bắt buộc
         * thì cũng phải truyền vào giá trị vào tham số không bắt buộc, tiếp tục đến tham số bắt buộc.
         *  - Trường hợp: Tham số bắt buộc đứng trước tham số không bắt buộc
         * thì tham số bắt buộc chắc chắn phải truyền tham trị vào,
         * còn tham số không bắt buộc truyền hay không đều được, miễn sau các tham số sau nó không có tham số bắt buộc.
         */
        if($sub) {
            echo 'Menu có Sub: ' . $data;
        } else {
            echo 'Menu KHÔNG có Sub: ' . $data;
        }
    }
}