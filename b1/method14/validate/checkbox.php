<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkbox Form</title>
</head>
<body>

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!empty($_POST['soThich'])) {
            foreach ($_POST['soThich'] as $option) {
                echo $option . '<br>';
            }
        }
    }

    if(!empty($_GET['sothich'])) {
        $soThichArr = $_GET['sothich'];
    } else {
        $soThichArr = [];
    }
?>

<form method="post" action="">
    <p>
        <input type="checkbox" name=soThich[]" value="1" <?php echo !empty($_POST['soThich']) && in_array(1, $_POST['soThich']) ? 'checked' : false ?> >
        <span>So Thich 1</span>
    </p>
    <p>
        <input type="checkbox" name=soThich[]" value="2" <?php echo !empty($_POST['soThich']) && in_array(2, $_POST['soThich']) ? 'checked' : false ?> >
        <span>So Thich 2</span>
    </p>
    <p>
        <input type="checkbox" name=soThich[]" value="3" <?php echo !empty($_POST['soThich']) && in_array(3, $_POST['soThich']) ? 'checked' : false ?> >
        <span>So Thich 3</span>
    </p>
    <p>
        <input type="checkbox" name=soThich[]" value="4" <?php echo !empty($soThichArr) && in_array(4, $soThichArr) ? 'checked' : false ?> >
        <span>So Thich 4</span>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>

</body>
</html>