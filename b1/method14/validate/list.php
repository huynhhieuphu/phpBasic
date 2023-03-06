<?php
    require_once 'function.php';
?>

<h1>Danh sach khach hang</h1>

<?php
    if(isset($_GET['message'])) {
        $messageCode = $_GET['message'];
        echo getMessage($messageCode);
    }
?>

<p><a href="index.php">Back</a></p>
