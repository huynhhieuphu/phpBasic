<?php
/**
 * Hàm đệ quy
 *
 * Nhược điểm:
 * - Chương trình chạy rất chậm
 * - Chỉ phù hợp dữ liệu nhỏ, nếu sử dụng cho dữ liệu lớn hiệu suất sẽ kém
 *
 * Ứng dụng: hiển thị các bài toán kiểu đa cấp: Chuyên mục, menu...
 * Hỗ trợ phân cấp url, breadcrumbs,... đa phần xử lý 2,3 cấp
 */


// Dãy số fibonacci
// - Tính số fibonacci thứ n
// - Hiển thị n + 1 số đầu tiên

function fibonacci($n) {
    if($n == 0 || $n == 1) return $n;
    return fibonacci($n - 1) + fibonacci($n - 2);
}

echo fibonacci(0) . '<br>';
echo fibonacci(1) . '<br>';
echo fibonacci(2) . '<br>';
echo fibonacci(3) . '<br>';
echo fibonacci(4) . '<br>';
echo fibonacci(5) . '<br>';
echo fibonacci(6) . '<br>';
echo fibonacci(7) . '<br>';

$num = 20;
for ($i = 0; $i < $num; $i++) {
    echo fibonacci($i) . ' ';
}

