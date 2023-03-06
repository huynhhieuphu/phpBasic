<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Method GET</title>
</head>
<body>

<?php
// Trong đây có quá trình
// 1. Gửi request lên Server
// 2. Lấy dữ liệu từ biến toàn cục $_GET
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
?>

<form method="get" action="">
    <div>
        <input type="text" name="username" placeholder="username...">
    </div>
    <div>
        <input type="email" name="email" placeholder="email...">
    </div>
    <button type="submit">Submit</button>
</form>

</body>
</html>