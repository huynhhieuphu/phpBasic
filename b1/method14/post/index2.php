<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Method POST</title>
</head>
<body>
<?php
// Trường hợp: Nếu submit form qua 1 file php khác kiểm tra phương thức POST dùng 1 trong 2 !empty($_POST) hay isset($_POST) đều được
?>
<form method="post" action="do_post.php">
    <div>
        <input type="text" name="username" placeholder="username...">
    </div>
    <div>
        <input type="email" name="email" placeholder="email...">
    </div>
    <button type="submit" name="btnSubmit">Submit</button>
</form>


</body>
</html>