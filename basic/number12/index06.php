<?php
// Hàm abs() : lấy giá trị tuyệt đối
// chuyển số âm thành số dương (vẫn giữ số nguyên và số thập phân)
var_dump(abs(-19)); // OUTPUT: int(19)
echo '<br>';
var_dump(abs('-19')); // OUTPUT: int(19)
echo '<br>';
var_dump(abs(19)); // OUTPUT: int(19)
echo '<br>';
var_dump(abs('19')); // OUTPUT: int(19)
echo '<br>';
var_dump(abs(-19.52)); // OUTPUT: float(19.52)
echo '<br>';
var_dump(abs('-19.52')); // OUTPUT: float(19.52)
echo '<br>';
var_dump(abs('19,52')); // OUTPUT: int(19)
echo '<br>';
var_dump(abs('-19,52')); // OUTPUT: int(19)
echo '<br>';