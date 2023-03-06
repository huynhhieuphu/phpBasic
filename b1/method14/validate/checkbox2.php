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
    <title>Checkbox Form</title>
</head>
<body>

<?php
    // Checked $_GET, $_POST
?>

<form method="post" action="">
    <p>
        <input type="checkbox" name=soThich[]" value="1" <?php echo makeChecked(1); ?> >
        <span>So Thich 1</span>
    </p>
    <p>
        <input type="checkbox" name=soThich[]" value="2" <?php echo makeChecked(2); ?> >
        <span>So Thich 2</span>
    </p>
    <p>
        <input type="checkbox" name=soThich[]" value="3" <?php echo makeChecked(3); ?> >
        <span>So Thich 3</span>
    </p>
    <p>
        <input type="checkbox" name=soThich[]" value="4" <?php echo makeChecked(4); ?> >
        <span>So Thich 4</span>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>

</body>
</html>