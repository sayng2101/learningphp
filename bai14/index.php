<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 14</title>
</head>
<body>
    <?php
    $width = $_POST["width"];
    $height = $_POST["height"];
    $area = $width * $height;
    ?>
    <form action="" method="post">
        <p>Diện tích hình chữ nhật</p>
        Chiều dài:
        <input type="text" name="width" value="<?php echo $width ?>"><br>
        Chiều rộng:
        <input type="text" name="height" value="<?php echo $height ?>"><br>
        Diện tích:
        <input type="text" value="<?php echo $area ?>" readonly><br>
        <button>Tính</button>
    </form>
</body>
</html>