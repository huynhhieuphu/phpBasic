<?php
// Làm tròn

// Hàm round() nếu bằng hoặc trên 5 sẽ làm lên, ngược lại dưới 5 làm tròn xuống.
// - Làm tròn tính từ phải sang trái
var_dump(round(1.5)); // OUTPUT: float(2)
echo '<br>';
var_dump(round(1.4)); // OUTPUT: float(1)
echo '<br>';
var_dump(round(1.54)); // OUTPUT: float(2)
echo '<br>';
var_dump(round(1.54, 1)); // OUTPUT: float(1.5)
echo '<br>';
var_dump(round(1.54, 2)); // OUTPUT: float(1.54)
echo '<br>';
var_dump(round(1.545, 2)); // OUTPUT: float(1.55)
echo '<br>';
var_dump(round(1.555, 2)); // OUTPUT: float(1.56)
echo '<br>';
var_dump(round(-1.5)); // OUTPUT: float(-2)
echo '<br>';
var_dump(round(-1.4)); // OUTPUT: float(-1)
echo '<hr>';

// Hàm ceil() luôn luôn làm tròn lên (làm tròn thành số lớn) - không quan tâm đằng sau dấu phẩy có bao nhiêu số thập phân
// thông thường áp dụng cho thuật toán phân trang
var_dump(ceil(1.5)); // OUTPUT: float(2)
echo '<br>';
var_dump(ceil(1.4)); // OUTPUT: float(2)
echo '<br>';
var_dump(ceil(1.54)); // OUTPUT: float(2)
echo '<br>';
var_dump(ceil(1.555)); // OUTPUT: float(2)
echo '<br>';
var_dump(ceil(-1.5)); // OUTPUT: float(-1)
echo '<hr>';

// Hàm floor() luôn luôn làm tròn xuống (làm tròn thành số nhỏ) - không quan tâm đằng sau dấu phẩy có bao nhiêu số thập phân
var_dump(floor(1.5)); // OUTPUT: float(1)
echo '<br>';
var_dump(floor(1.4)); // OUTPUT: float(1)
echo '<br>';
var_dump(floor(1.54)); // OUTPUT: float(1)
echo '<br>';
var_dump(floor(1.555)); // OUTPUT: float(1)
echo '<br>';
var_dump(floor(-1.5)); // OUTPUT: float(-2)
echo '<hr>';

