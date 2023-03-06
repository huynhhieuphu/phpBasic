<?php
    require_once 'function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate Form</title>
</head>
<body>

<?php
/**
 * Rules:
 * - fullName: Phải nhập, lớn hơn 5 ký tự
 * - email: phải nhập, định dạng email
 * - age: phải nhập, là số, là số nguyên dương
 */


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $age = isset($_POST['age']) ? trim($_POST['age']) : null;

    //validate
    $error = [];
    if(empty($fullName)) {
        $error['fullName']['required'] = 'Họ và Tên không để trống';
    } else if(strlen($fullName) < 5) {
        $error['fullName']['min'] = 'Họ và Tên ít nhất 5 ký tự';
    }

    if(empty($email)) {
        $error['email']['required'] = 'Địa chỉ email không để trống';
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email']['invalid'] = 'Định dạng email không hợp lệ';
    }

    if(empty($age)) {
        $error['age']['required'] = 'Tuổi không để trống';
    } else if(!filter_var($age, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]])) {
        $error['age']['invalid'] = 'Tuổi không hợp lệ';
    }

    /*echo "<pre>";
    var_dump($error);
    echo "</pre>";*/

    if (empty($error)) {
        redirect('list.php?message=1');
    } else {
        echo '<span style="font-size: 18px; color: red">Validate fail</span>';
    }
}


?>

<form method="post" action="">
    <div>
        <label for="fullName">Ho va Ten</label><br>
        <input type="text" name="fullName" placeholder="Full name..." value="<?= $_POST['fullName'] ?? '' ?>"><br>

        <?php
            echo isset($error['fullName']['required']) ? '<span style="color: red">'. $error['fullName']['required'] .'</span>' : false;
            echo isset($error['fullName']['min']) ? '<span style="color: red">'. $error['fullName']['min'] .'</span>' : false;
        ?>
    </div>
    <div>
        <label for="email">Email</label><br>
        <input type="text" name="email" placeholder="Email..." value="<?= $_POST['email'] ?? '' ?>"><br>
        <?php
            echo isset($error['email']['required']) ? '<span style="color: red">'. $error['email']['required'] .'</span>' : false;
            echo isset($error['email']['invalid']) ? '<span style="color: red">'. $error['email']['invalid'] .'</span>' : false;
        ?>
    </div>
    <div>
        <label for="age">Tuoi</label><br>
        <input type="text" name="age" placeholder="Age..." value="<?= $_POST['age'] ?? '' ?>"><br>
        <?php
            echo isset($error['age']['required']) ? '<span style="color: red">'. $error['age']['required'] .'</span>' : false;
            echo isset($error['age']['invalid']) ? '<span style="color: red">'. $error['age']['invalid'] .'</span>' : false;
        ?>
    </div>
    <div>
        <button type="submit" name="btnSubmit">Submit</button>
    </div>
</form>

</body>
</html>