<?php
require_once 'interfaces/BarInterface.php';

require_once 'interfaces/BooInterface.php';

require_once 'interfaces/FooInterface.php';

require_once 'interfaces/AuthInterface.php';

require_once 'interfaces/RoleInterface.php';

require_once 'classes/Auth.php';


//Interface không thể khởi tạo được đối tượng
// $authInterface = new AuthInterface(); // LỖI


$auth = new Auth();

echo $auth->login();
echo '<hr>';

print_r($auth::_MSG_TEMPLATE);
echo '<hr>';

echo $auth->checkRole();