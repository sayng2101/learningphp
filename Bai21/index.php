<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 21</title>
</head>
<body>
    <?php
    $soa = $_POST["soa"]; 
    $sob = $_POST["sob"]; 
    if($soa == 0){
        $nghiem = "Phương trình vô nghiệm";
    }elseif($sob == 0) {
        $nghiem = "Phương trình vô số nghiệm";
    }else {
        $nghiem = -$sob - $soa;
    }
    ?>
    <form action="index.php" method="post">
        <p>Giải phương trình bậc nhất</p>
        Phương trình:
        <input type="text" name="soa" value="<?php echo $soa ?>">x + <input type="text" name="sob" value="<?php echo $sob ?>"> = 0<br>
        Nghiệm: 
        <input type="text" readonly value="<?php echo "x = ".$nghiem ?>"><br>
        <button>Giải phương trình</button>
    </form>
</body>
</html>