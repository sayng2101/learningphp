<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 22</title>
</head>
<body>
    <?php
    $start = $_POST["batdau"];
    $end = $_POST["ketthuc"];
    if($start < $end){
        if($start >= 17 && $start <= 24){
            $tinhtien = ($end - $start) * 45000;
        }elseif($start >= 10 && $start <= 17){
            $tinhtien = ($end - $start) * 20000;
        }
    }else{
        $tinhtien =  "Thoi gian ket thuc phai > thoi gian bat dau";
    }
    ?>
    <form action="index.php" method="post">
        <p>Tính tiền karaoke</p>
        Giờ bắt đâu:
        <input type="text" name="batdau" value="<?php echo $start ?>">(h)<br>
        Giờ kết thúc:
        <input type="text" name="ketthuc" value="<?php echo $end ?>">(h)<br>
        Tiền tất toán:
        <input type="text" readonly value="<?php echo $tinhtien ?>">(VNĐ)<br>
        <button>Tính tiền</button>
    </form>
</body>
</html>