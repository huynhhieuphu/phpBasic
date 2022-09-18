<?php
/**
 * break - continue
 * die - exit
 *
 * break : dùng để thoát khỏi vòng lặp
 * - Tác dụng 1: thoát ra khỏi vòng lặp làm chương trình nhanh hơn.
 * - Tác dụng 2: giúp cho bài toán cho ra kết quả chính xác hơn.
 */

for($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
    if ($i === 5) {
        break; // Thoát khỏi vòng lặp khi thoã mãn điều kiện
    }
}

echo "<hr>";
/**
 * continue : dùng để nhảy sang vòng lặp kế tiếp
 */
for($i = 0; $i <= 10; $i++) {
    if ($i === 5) {
        continue; // bỏ qua vòng lặp
    }
    echo $i . "<br>";
}

/**
 * break và continue thường sử dụng cho vòng lặp
 */

echo "<hr>";

/**
 * die và exit: dừng thực thi các câu lệnh dưới (từ khoá die hoặc exit).
 * - Thường dùng cho việc debug, ngoài ra còn tác dụng khác.
 *
 * Cú pháp:
 *  - die;
 *    + hoặc die();
 *    + hoặc die('message');
 *  - exit
 *    + hoặc exit();
 *    + hoặc exit('message');
 */

echo "execute 1";
//die;
exit;
echo "execute 2";

/**
 * die và exit thường sử dụng cho toàn bộ chương trình
 *
 * Sự khác nhau exit và die:
 * - exit : Nguồn góc từ ngôn ngữ lập trình C++
 * - die : Nguồn gốc từ ngôn ngữ lập trình Perl
 */