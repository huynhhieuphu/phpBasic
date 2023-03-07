<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>
<body>

<?php
/**
 * Biến toàn cục $_FILE lưu trữ thông tin tập tin tải lên.
 *
 * Hàm move_uploaded_file() di chuyển tập tin đã tải đến vị trí mới.
 * Hàm @move_uploaded_file() tính năng y chang, nhưng sẽ không hiền thị báo lỗi nếu FALSE.
 */
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $allowExt = ['jpeg', 'jpg', 'png', 'svg'];
    $allowSize = 1048576; // 1048576KB = 1MB

    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileSize = $file['size'];

    //Đổi tên file trước khi upload
    $fileNameArr = explode('.', $fileName);
    $extension = end($fileNameArr);
    $newName = md5(uniqid()) . '.' . $extension;

    //Kiểm tra tải tập tin có lỗi không?
    if($file['error'] !== 0) {
        exit('Tập tin tải lên lỗi');
    }

    //Validate file
    if(!in_array($extension, $allowExt)) {
        exit('Định dạng tập tin không đúng');
    }
    if($fileSize > $allowSize) {
        exit('Kích thước tập tin tối đa 1MB');
    }

    // upload file
    if(! @move_uploaded_file($fileTmp, 'uploads/' . $newName)) {
        exit('Di chuyển tập tin bị lỗi');
    }else {
        exit('Tải tập tin thành công');
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <p>
        <input type="file" name="file"><br>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>


</body>
</html>