<?php
/**
 * namespace
 */

require_once 'classes/Admin/Post.php';
require_once 'classes/Home/Post.php';
require_once 'classes/Home/Product.php';
require_once 'classes/Main.php';

//use AdminPost\Post;
//// Trường hợp trùng tên class dùng từ khoá as (đặt lại tên class mới)
//use HomePost\Post as HomePost;

//// Trường hợp: sử dụng cả 2 class chung 1 class khác
use App\Oop\Main;
$main = new Main();

//// cách 1: sử dụng namespace khi khởi tạo đối tượng
//$adminPost = new \AdminPost\Post();
//echo '<br>';
//$homePost = new \HomePost\Post();

//// Cách 2: sử dụng từ khoá use
//$adminPost = new Post();
//echo '<br>';
//$homePost = new HomePost();