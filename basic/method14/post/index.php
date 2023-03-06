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
    // Phương thức POST: có tính bảo mật hơn khi gửi qua server, không giới hạn dung lượng gửi lên (phù thuộc con server cấu hình)
    // Phương thức POST không nhất thiết chỉ sử dụng tại form mà còn có thể sự dụng cho API
    // Phương thức POST dùng từ biến TOÀN CỤC $_POST


//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";

    // isset($_POST['btnSubmit']) : kiểm tra có nhấn nút Submit không
    if(isset($_POST['btnSubmit'])) {
        if(isset($_POST['username'])) {
            $username = $_POST['username'];
        }

        if(isset($_POST['email'])) {
           $email = $_POST['email'];
        }

        echo 'Username: ' . $username . '<br>';
        echo 'Email: ' . $email . '<br>';
    }

    // isset($_POST['btnLogin']) : kiểm tra có nhấn nút Login không ? trong
    if(isset($_POST['btnLogin'])) {
        if(isset($_POST['username'])) {
            $username = $_POST['username'];
        }

        if(isset($_POST['password'])) {
            $pass = $_POST['password'];
        }

        echo 'Username: ' . $username . '<br>';
        echo 'Password: ' . $pass . '<br>';
    }


    // Lưu ý: Nếu submit form trên cùng 1 file php khi kiểm tra phương thức POST dùng !empty($_POST) hay vì dùng isset($_POST)
    // Vì biến POST ban đầu sẽ không có tham số, chỉ khi nhấn submit mới có.

?>

<form method="post" action="">
    <div>
        <input type="text" name="username" placeholder="username...">
    </div>
    <div>
        <input type="email" name="email" placeholder="email...">
    </div>
    <button type="submit" name="btnSubmit">Submit</button>
</form>

<form method="post" action="">
    <div>
        <input type="text" name="username" placeholder="username...">
    </div>
    <div>
        <input type="password" name="password" placeholder="password...">
    </div>
    <button type="submit" name="btnLogin">Login</button>
</form>


</body>
</html>