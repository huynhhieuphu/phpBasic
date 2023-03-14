<?php
require_once 'classes/Animal.php';
require_once 'classes/Dog.php';

// static::methodName() sẽ đại diện cho class truy cập vào phương thức tĩnh
echo Animal::render(); //OUTPUT: Đây là động vật
echo '<br>';
echo Dog::render(); //OUTPUT: Đây là con chó