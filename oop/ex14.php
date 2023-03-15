<?php
/**
 * Trait
 */

require_once 'trait/Business.php';
require_once 'trait/Database.php';
require_once 'trait/Auth.php';
require_once 'classes/Post.php';

$postModel = new Post();
$postModel->getAll();

echo '<hr>';
echo 'Gọi thuộc tính bên ngoài class:' . $postModel->hostname;

echo '<hr>';
echo $postModel->fetch();