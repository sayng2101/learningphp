<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 17</title>
</head>
<body>
    <?php
    $hk1 = $_POST["HK1"];
    $hk2 = $_POST["HK2"];
    $dtb = ($hk1 + $hk2 * 2) / 3;
    if($dtb >= 5){
        $kq = "Được lên lớp";
    }else {
        $kq = "Ở lại lớp";
    }
    
    if($dtb >= 8){
        $hl = "Giỏi";
    }elseif(6.5 <= $dtb && $dtb < 8){
        $hl = "Khá";
    }elseif(5 <= $dtb && $dtb < 6.5){
        $hl = "Trung bình";
    }else {
        $hl = "Yếu";
    }

    ?>

    <form action="index.php" method="post">
    <p>Kết quả học tập</p>
    Điểm HK1:
    <input type="text" name="HK1" value="<?php echo $hk1 ?>"><br>
    Điểm HK2:
    <input type="text" name="HK2" value="<?php echo $hk2 ?>"><br>
    Điểm trung bình:
    <input type="text" name="DTB" readonly value="<?php echo $dtb ?>"><br>
    Kết quả:
    <input type="text" name="kq" readonly value="<?php echo $kq ?>"><br>
    Xếp loại học lực:
    <input type="text" name="hl" readonly value="<?php echo $hl ?>"><br>
    <button>Xem kết quả</button>
    </form>
</body>
</html>