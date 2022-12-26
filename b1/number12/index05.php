<?php
// Ép kiểu thành số nguyên
// Lấy từ trái sang phải tới khi gặp kí tự không phải số thì dừng.

// Cú pháp: (int) $varName;

var_dump((int) 19.52); // OUTPUT: int(19)
echo '<br>';
var_dump((int) '19.52'); // OUTPUT: int(19)
echo '<br>';
var_dump((int) '19,52'); // OUTPUT: int(19)
echo '<br>';
var_dump((int) '19 52'); // OUTPUT: int(19)
echo '<br>';
var_dump((int) '19'); // OUTPUT: int(19)
echo '<br>';
var_dump((int) TRUE); // OUTPUT: int(1)
echo '<br>';
var_dump((int) FALSE); // OUTPUT: int(0)
echo '<br>';
var_dump((int) NULL); // OUTPUT: int(0)
echo '<hr>';

// Ép kiểu thành số thập phân
// Dấu chấm trong ngôn ngữ tin học hiểu là số thập phân

// Cú pháp: (float) $varName;

var_dump((float) '19.52'); // OUTPUT: float(19.52)
echo '<br>';
var_dump((float) '19,52'); // OUTPUT: float(19)
echo '<br>';
var_dump((float) '19 52'); // OUTPUT: float(19)
echo '<br>';
var_dump((float) TRUE); // OUTPUT: float(1)
echo '<br>';
var_dump((float) FALSE); // OUTPUT: float(0)
echo '<br>';
var_dump((float) NULL); // OUTPUT: float(0)
echo '<hr>';