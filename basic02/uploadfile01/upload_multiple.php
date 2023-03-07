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
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['file'])) {
    /*echo "<pre>";
        print_r($_FILES['file']);
        echo "</pre>";*/
    $allowExt = ['image/jpeg', 'image/jpg', 'image/png', 'image/svg'];
    $allowSize = 1048576; // 1048576KB (1024*1024) = 1MB

    $files = $_FILES['file'];
    $fileNames = $files['name'];
    $error = $uploads = [];
    $flag = true;
    foreach($fileNames as $key => $item) {
        $fileNameArr = explode('.', $item);
        $extension = end($fileNameArr);
        $newName = md5(uniqid()) . '.' . $extension;

        $fileErrors = $files['error'][$key];
        $fileSizes = $files['size'][$key];
        $fileTmpNames = $files['tmp_name'][$key];
        $fileTypes = $files['type'][$key];

        if($fileErrors != 0)  {
            $flag = false;
            $error[$key] = 'upload_err';
        }

        if($fileSizes > $allowSize) {
            $flag = false;
            $error[$key] = 'size_err';
        }

        if(!in_array($fileTypes, $allowExt)) {
            $flag = false;
            $error[$key] = 'ext_err';
        }

        if($flag) {
            $move= @move_uploaded_file($fileTmpNames, 'uploads/'.$newName);
            if(!$move) {
                $error[$key] = 'move_err';
            }else{
                $uploads[] = $newName;
            }
        }

    }

    /*echo "<pre>";
    print_r($error);
    echo "</pre>";*/

    if(!empty($error)) {
        foreach ($error as $key => $item) {
            switch ($item){
                case 'upload_err' :
                    echo '<p style="color: red">Tải tập tin <b>' . $fileNames[$key] . '</b> bị lỗi <p>';
                    break;
                case 'size_err' :
                    echo '<p style="color: red">Kích thước tập tin <b> ' . $fileNames[$key] . '</b> lớn hơn 1MB <p>';
                    break;
                case 'ext_err' :
                    echo '<p style="color: red">Định dạng tập tin <b>' . $fileNames[$key] . '</b> không đúng <p>';
                    break;
                default:
                    echo '<p style="color: red">Di chuyển tập tin <b>' . $fileNames[$key] . '</b> bị lỗi <p>';
                    break;
            }
        }
    }

    /*echo "<pre>";
    print_r($uploads);
    echo "</pre>";*/

    if($uploads) {
        foreach ($uploads as $item) {
            echo '<p style="color: green">Tập tin <b>'. $item . '</b> tải thành công.</p>';
        }
    }

}


?>



<form method="post" enctype="multipart/form-data">
    <p>
        <input type="file" name="file[]" multiple><br>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>


</body>
</html>