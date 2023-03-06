<?php
/**
 * Những cú pháp thay thế:
 * 1. Toán tử 3 ngôi
 * 2. Cú pháp thay thế if
 * 3. Cú pháp thay thế for
 * 4. Cú pháp thay thế while
 * 5. Cú pháp thay thế foreach
 *
 */

$num = 17;
if ($num >= 18) {
    echo "Đã đủ tuổi";
} else {
    echo "Chưa đủ tuổi";
}
echo "<br>";
/**
 * 1. Toán tử 3 ngôi
 */
//echo $num >= 18 ? "Đã đủ tuổi" : "Chưa đủ tuổi";

$printStr = $num >= 18 ? "Đã đủ tuổi" : "Chưa đủ tuổi"; // gán vào 1 biến
var_dump($printStr);
echo "<br>";
/**
 * Cú pháp: bieu_thuc_dieu_kien ? ket_qua_dung : ket_qua_sai;
 *
 * Lưu ý:
 * - Toán tử 3 ngôi phải gán với 1 biểu thức (echo, hoặc gán)
 * - Luôn luôn phải có kết quả sai
 * (Trường hợp: kết quả sai không muốn hiển thị set giá trị: false, null, empty "")
 *
 */

$printStr2 = $num >= 18 ? "Đã đủ tuổi" : ""; // kết quả sai trả về false,null,empty
var_dump($printStr2);