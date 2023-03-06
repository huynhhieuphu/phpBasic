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
 * Hàm @move_uploaded_file() tính năng y vậy, nhưng sẽ không hiền thị báo lỗi nếu FALSE.
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

    $message = [];
    //Kiểm tra upload file có lỗi không
    if($file['error'] === 0) {
        //Validate file
        if(!in_array($extension, $allowExt)) {
            $message['file']['ext_err'] = 'Định dạng tập tin không đúng';
        } else if ($fileSize > $allowSize) {
            $message['file']['size_err'] = 'Kích thước tập tin tối đa 1MB';
        }

        // upload file
        if(empty($message)) {
            $uploads = @move_uploaded_file($fileTmp, 'uploads/' . $newName);
            if(!$uploads) {
                $message['file']['move_err'] = 'Di chuyển tập tin bị lỗi';
            }else {
                $message['file']['update_success'] = 'Tải tập tin thành công';
            }
        }
    } else {
        $message['file']['upload_err'] = 'Tập tin tải lên lỗi';
    }

}
?>

<form method="post" enctype="multipart/form-data">
    <p>
        <input type="file" name="file"><br>
        <?php
        echo isset($message['file']['upload_err']) ? '<span style="color: red">'.$message['file']['upload_err'].'</span>' : false;
        echo isset($message['file']['ext_err']) ? '<span style="color: red">'.$message['file']['ext_err'].'</span>' : false;
        echo isset($message['file']['size_err']) ? '<span style="color: red">'.$message['file']['size_err'].'</span>' : false;
        echo isset($message['file']['move_err']) ? '<span style="color: red">'.$message['file']['move_err'].'</span>' : false;
        ?> 
        
    </p>
    <p>
        <button type="submit">Submit</button>
        <?php
        echo isset($message['file']['update_success']) ? '<span style="color: green">'.$message['file']['update_success'].'</span>' : false;
        ?>
    </p>
</form>


</body>
</html>