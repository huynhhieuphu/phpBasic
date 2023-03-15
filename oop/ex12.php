<?php
/**
 * Demo Design Pattern Repository
 */

// Controller - Lớp xử lý logic
require_once 'interfaces/RepositoryInterface.php';
require_once 'interfaces/CategoryRepositoryInterface.php';
require_once 'classes/BaseRepository.php';
require_once 'classes/Category.php';
require_once 'classes/CategoryRepository.php';

$categoryRepo = new CategoryRepository();

$categories = $categoryRepo->getCategory();
echo '<hr>';
$category = $categoryRepo->getDetailCategory(1);
echo '<hr>';
$categoryRepo->addCategory('new data');