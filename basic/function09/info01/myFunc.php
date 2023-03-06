<?php
/**
 * 1. Định nghĩa hàm phải đặt phía trên, sau mới gọi được hàm đã định nghĩa.
 * 2. Có thể gọi hàm trong hàm khác, không quan tâm đến hàm nào định nghĩa trước hay định nghĩa sau.
 */
if(!function_exists('setMessage')) {
    function setMessage($message = null) {
        echo 'Đây là nội dung hàm setMessage()';
        if($message != null) {
            echo '<br>';
            echo $message;
        }
    }
}