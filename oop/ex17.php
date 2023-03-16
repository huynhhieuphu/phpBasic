<?php
/**
 * Call multiple method
 */
require_once 'classes/DB.php';

use App\Oop\DB;

// Dùng return $this tại phương thức gọi
//$db = new DB;
//$db->select()->table('users')->where('id', '=', 1)->get();

// Trường hợp goi phương thức tĩnh
new DB;
DB::select()->table('post')->where('title', 'LIKE', 'lorem ipsum')->get();