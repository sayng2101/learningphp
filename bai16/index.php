<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 16</title>
</head>
<body>
    <?php
    $chuho = $_POST["namech"];
    $chisocu = $_POST["chisocu"];
    $chisomoi = $_POST["chisomoi"];
    $dongia = 2000;
    $thanhtoan = ($chisomoi - $chisocu) * $dongia;
    ?>
    <form method="post" action="index.php">
        <p>Thanh toán tiền điện</p>
        Tên chủ hộ:
        <input type="text" name="namech" value="<?php echo $chuho ?>"><br>
        Chỉ số cũ:
        <input type="number" name="chisocu" value="<?php echo $chisocu ?>"><br>
        Chỉ số mới:
        <input type="number" name="chisomoi" value="<?php echo $chisomoi?>"><br>
        Đơn giá:
        <input type="number" name="dongia" value="<?php echo $dongia ?>"><br>
        Số tiền thanh toán:
        <input type="number" name="thanhtoan" readonly value="<?php echo $thanhtoan ?>"><br>
        <button>Tính</button>
    </form>
</body>
</html>