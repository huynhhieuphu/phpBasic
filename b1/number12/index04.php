<?php
// is_int() Kiểm tra có phải số nguyên không ???
var_dump(is_int(0)); //OUTPUT: bool(true)
echo '<br>';
var_dump(is_int(1)); //OUTPUT: bool(true)
echo '<br>';
var_dump(is_int(-1)); //OUTPUT: bool(true)
echo '<br>';
var_dump(is_int(0.5)); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_int('1')); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_int(TRUE)); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_int(FALSE)); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_int(NULL)); //OUTPUT: bool(false)
echo '<hr>';


// is_float() Kiểm tra có phải số thập phân không ???
var_dump(is_float(0)); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_float(1)); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_float(-1)); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_float(0.5)); //OUTPUT: bool(true)
echo '<br>';
var_dump(is_float(-0.5)); //OUTPUT: bool(true)
echo '<br>';
var_dump(is_float('1')); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_float(TRUE)); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_float(FALSE)); //OUTPUT: bool(false)
echo '<br>';
var_dump(is_float(NULL)); //OUTPUT: bool(false)
echo '<hr>';