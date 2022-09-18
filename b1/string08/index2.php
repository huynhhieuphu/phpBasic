<?php
/**
 * Các hàm xử lý chuỗi
 *
 */

/**
 * Hàm liên quan đến vấn đề bảo mật csdl.
 * 1. Thêm ký tự escape / vào phía trước các ký tự mong muốn
 */
echo addcslashes('Trung tâm đào tạo lập trình "Unicode"', 'Ul') . "<br>";

/**
 * Hàm liên quan đến vấn đề bảo mật csdl.
 * 2. Thêm ký tự escape / vào phía trước các ký tự " (dấu ngoặc kép), ' (dấu ngoặc đơn), / (dấu escape)
 */
echo addslashes('Trung tâm \đào tạo lập trình "Unicode"') . "<br>";

/**
 * 3. Loại bỏ tất cả các ký tự escape có trong chuỗi
 */
echo stripslashes('Trung tâm \\đào tạo lập trình \\"Unicode\\"') . "<br>";

/**
 * Hàm liên quan đến mảng
 * 4. Chuyển chuỗi thành mảng
 */
print_r(explode(' ', 'Trung tâm Unicode')); echo "<br>";

/**
 * 5. Chuyển mảng thành chuỗi
 */
echo implode('-', array('trung','tam','unicode')) . "<br>";

/**
 * 6. lấy độ dài của chuỗi
 */
$len = strlen('Trung tâm đào tạo lập trình "Unicode"');
echo "Độ dài chuỗi: $len" . "<br>";

/**
 * 7. lấy số chữ trong chuỗi
 */
$countWord = str_word_count('Xin chao Unicode');
echo "Đếm từ: $countWord" . "<br>";

$countWord2 = str_word_count('Xin chào Unicode', 0 , "àáãâçêéíîóõôúÀÁÃÂÇÊÉÍÎÓÕÔÚ");
echo "Đếm từ có tiếng việt là $countWord2" . "<br>";
// format : 0 - trả về số lượng từ được tìm thấy
// charList: danh sách các kí tự

/**
 * 8. Lặp chuỗi theo số lần xác định
 */
echo str_repeat('*', 8) . "<br>";

/**
 * 9. Tìm kiếm và thay thế
 */
$strReplace = str_replace('Unicode', 'PHP', 'Trung tâm đào tạo lập trình "Unicode"');
echo $strReplace . "<br>";
// Tham số thứ 2 để trống - mục đích loại bỏ ký tự
$strReplaceTwo = str_replace('lập trình', '', $strReplace);
echo $strReplaceTwo . "<br>";
// Trường hợp: thay dấu escape cần phải double dấu escape mới hiểu.
echo str_replace('\\', '/', 'C:\\xampp\\htdocs\\projectName') . "<br>";

/**
 * 10. Hàm mã hoá 1 chiều (32 ký tự)
 */
echo md5('123456') . "<br>";

/**
 * 11. Hàm mã hoá 1 chiều (40 ký tự)
 */
echo sha1('123456') . "<br>";

/**
 * 12. Chuyển chuỗi HTML thành dạng thực thể
 */
$strHtml = htmlentities('<strong>Hello world</strong>');
echo $strHtml . "<br>";

/**
 * 13. Chuyển dạng thực thể thành chuỗi HTML
 */
$html = html_entity_decode($strHtml);
echo $html . "<br>";

/**
 * 14. Loại bỏ thẻ HTML
 */
echo strip_tags('<p>Lorem ipsum <a href="#">dolor sit <strong>amet consectetur</strong></a> adipiscing elit<p>') . "<br>";
// Tham số thứ 2: cho phép thẻ html hoạt động bình thường
echo strip_tags('<p>Lorem ipsum <a href="#">dolor sit <strong>amet consectetur</strong></a> adipiscing elit<p>', "<a>") . "<br>";
echo strip_tags('<p>Lorem ipsum <a href="#">dolor sit <strong>amet consectetur</strong></a> adipiscing elit<p>', "<a><strong>") . "<br>";

/**
 * 15. lấy chuỗi con từ chuỗi cha
 */
echo substr('Lorem ipsum dolor sit amet', 0, 5) . "<br>";

// lưu ý: với ký tự có dấu thì đếm thành 2
$subStr = substr('Lý do CEO Apple đánh giá cao thị trường Việt Nam', 0, 3);
echo $subStr . "<br>";
$subStrTwo = substr('Lý do CEO Apple đánh giá cao thị trường Việt Nam', 7, 3);
echo $subStrTwo . "<br>";
echo substr("Nước Việt Nam", 0, 7) . "<br>"; //OUTPUT: Nước
// Trường hợp muốn lấy ngược - tham số thứ 2 sẽ độ dài và giá trị số âm
$str15 = "Lorem ipsum dolor sit amet";
$newStr16 = substr($str15, -8);
echo $newStr16 . "<br>";

/**
 * 16. Tách chuỗi từ ký tự cho trước cho đến hết chuỗi
 */
echo strstr('hieuphu@bincg.com', 'bincg') . "<br>";

/**
 * 17. Tìm chuỗi và trả về số vị trí index
 */
$strPos = strpos('Lorem ipsum dolor sit amet', 'dolor');
var_dump($strPos);
echo "<br>";
// không tìm thấy trả về false
$strPos = strpos('Lorem ipsum dolor sit amet', 'foo');
var_dump($strPos);
echo "<br>";

/**
 * 18. Tìm - cắt bỏ và thay thế chuỗi
 *
 * Tham số 3: vị trí bắt đầu tìm
 * Tham số 4: độ dài sẽ thay thế
 *  - Không truyền tham số 4 sẽ thay thế toàn bộ tính từ vị trí Tham số thứ 3
 */
echo substr_replace("Lorem ipsum dolor sit amet", '*', 0, 1) . "<br>";
echo substr_replace("Lorem ipsum dolor sit amet", '*', 1, 1) . "<br>";
echo substr_replace("Lorem ipsum dolor sit amet", '*', 0, 6) . "<br>";
echo substr_replace("Lorem ipsum dolor sit amet", '*', 6, 5) . "<br>";
echo substr_replace("Lorem ipsum dolor sit amet", '*', 0) . "<br>";
echo substr_replace("Lorem ipsum dolor sit amet", '*', 6) . "<br>";

/**
 * 19. Chuyển các ký tự sang viết thường
 */
echo strtolower('Xin Chao') . "<br>"; // không hỗ trợ tiếng viết có dấu
echo mb_strtolower('Xin ChÀo', 'UTF-8') . "<br>"; // hỗ trợ tiếng việt có dấu

/**
 * 20. Chuyển các ký tự sang viết HOA
 */
echo strtoupper('Xin Chao') . "<br>"; // không hỗ trợ tiếng viết có dấu
echo mb_strtoupper('Xin ChÀo', 'UTF-8') . "<br>"; // hỗ trợ tiếng việt có dấu

/**
 * 21. Chuyển chữ cái đầu tiền sang viết Hoa
 */
echo ucfirst('lorem ipsum') . "<br>";

/**
 * 22. Chuyển chữ cái đầu tiền sang viết thường
 */
echo lcfirst('LOREM IPSUM') . "<br>";

/**
 * 23. Chuyển ký tự đầu tiên thuộc chữ trong chuỗi
 */
echo ucwords('lorem ipsum') . "<br>";

/**
 * 24. Xoá các ký tự đầu và cuối (xoá 2 bên)
 */
echo trim('     lorem ipsum     ') . "<br>";
echo trim('lorem ipsum', 'lm') . "<br>";
echo trim('https://www.domain-name.abc/path/path-other/', '/') . "<br>";

/**
 * 25. Xoá các ký tự đầu (xoá bên trái)
 */
echo ltrim('*****lorem ipsum*****', '*') . "<br>";

/**
 * 26. Xoá các ký tự cuối (xoá bên phải)
 */
echo rtrim('*****lorem ipsum*****', '*') . "<br>";

/**
 * 27. tách chuỗi lớn thành từng chuổi nhỏ
 */
echo chunk_split('loremloremlorem', 5, '-') . "<br>";
echo rtrim(chunk_split('loremloremlorem', 5, '-'), '-') . "<br>";

/**
 * 28. Chuyển ký tự \n thành thẻ <br>
 */
echo nl2br("Lorem ipsum dolor sit amet \n consectetur adipiscing elit") . "<br>";

/**
 * 29. Chuyển json sang thành mảng hoặc object
 */
print_r(json_decode('{"item1":"value1","item2":"value2"}'));
//OUTPUT: stdClass Object ( [item1] => value1 [item2] => value2 )
echo "<br>";
print_r(json_decode('{"item1":"value1","item2":"value2"}', true));
//OUTPUT: Array ( [item1] => value1 [item2] => value2 )
echo "<br>";
print_r(json_decode('["a","b","c","d"]'));
//OUTPUT: Array ( [0] => a [1] => b [2] => c [3] => d )
echo "<br>";

/**
 * 30. Chuyển mảng hoặc objecy thành json
 */
echo json_encode(['item1' => 'value2', 'item2' => 'value2']) . "<br>";
//OUTPUT: {"item1":"value2","item2":"value2"}
var_dump(json_encode(['a','b','c','d']));
//OUTPUT: string(17) "["a","b","c","d"]"