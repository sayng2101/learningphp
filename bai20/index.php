<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 20</title>
</head>
<body>
    <?php
    $soa = $_POST["soa"];
    $sob = $_POST["sob"];
    if($soa > $sob){
        $sln = $soa; 
    }else {
        $sln = $sob;
    }
    ?>
    <form action="index.php" method="post">
        <p>Tìm số lớn nhất</p>
        Số a: 
        <input type="text" name="soa" value="<?php echo $soa ?>"><br>
        Số b: 
        <input type="text" name="sob" value="<?php echo $sob ?>"><br>
        Số lớn nhất:
        <input type="text" readonly value="<?php echo $sln ?>"><br>
        <button>Tìm</button>
    </form>
</body>
</html>