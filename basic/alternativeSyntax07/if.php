<?php
/**
 * 2. Cú pháp thay thế if
 */
$num = 18;

if($num >= 18) {
    echo "Đã đủ tuổi";
} else {
    echo "Chưa đủ tuổi";
}
echo "<hr>";
// Thay thế
if($num >= 18):
    echo "Đã đủ tuổi";
else:
    echo "Chưa đủ tuổi";
endif;

/**
 * Lưu ý cú pháp thay thế:
 * - Thay vì dùng dấu ngoặc nhọn, sử dụng bằng dấu 2 chấm
 * - kết thúc bằng keyword: endif để biết đang sử dụng cho if nào
 */

