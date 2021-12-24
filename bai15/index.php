<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 15</title>
</head>
<body>
    <?php
    $bankinh = $_POST["bankinh"];
    $chuvi = 2 * $bankinh * 3.14;
    $dientich = $bankinh * $bankinh * 3.14;
    ?>
    <form method="post" action="index.php">
        <p>Diện tích và chu vi hình tròn</p>
        Bán kính:
        <input type="text" name="bankinh" value="<?php echo $bankinh ?>"><br>
        Diện tích:
        <input type="text" readonly value="<?php echo $dientich ?>"><br>
        Chu vi:
        <input type="text" readonly value="<?php echo $chuvi ?>"><br>
        <button>Tính</button>
    </form>
</body>
</html>