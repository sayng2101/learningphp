<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 18</title>
</head>
<body>
    <?php
    $toan = $_POST["toan"];
    $hoa = $_POST["hoa"];
    $ly = $_POST["ly"];
    $diemchuan = 20;
    $tongdiem = $toan + $ly + $hoa;
    if($tongdiem >= $diemchuan && $toan >= 5 && $ly >= 5 && $hoa >= 5){
        $kq = "Đỗ";
    }else {
        $kq = "Rớt";
    }
    ?>
    <form action="index.php" method="post">
        <p>Kết quả thi đại học</p>
        Toán:
        <input type="text" name="toan" value="<?php echo $toan ?>"><br>
        Lý:
        <input type="text" name="ly" value="<?php echo $ly ?>"><br>
        Hóa:
        <input type="text" name="hoa" value="<?php echo $hoa ?>"><br>
        Điểm chuẩn:
        <input type="text" name="diemchuan" readonly value="<?php echo $diemchuan ?>"><br>
        Tổng điểm:
        <input type="text" name="tongđiểm" readonly value="<?php echo $tongdiem ?>"><br>
        Kết quả:
        <input type="text" name="ketqua" value="<?php echo $kq ?>" readonly><br>
        <button>Xem kết quả</button>
    </form>
</body>
</html>