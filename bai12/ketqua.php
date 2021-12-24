<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
</head>
<body>
    <div class="title">Phép tính trên hai số</div>
    <form action="ketqua.php">
    <div>Chọn phép tính: value="<?php 
     if(isset($_POST['submit'])){
        if(isset($_POST['tinh'])){
            echo $_POST['tinh'];
        }
    }
    ?></div>
    Số thứ nhất: 
    <input type="text" name="input1" value="<?php echo $so1 = $_POST["input1"];?>"><br>
    Số thứ hai:
    <input type="text" name="input2" value="<?php echo $so2 = $_POST["input2"];?>"><br>
    Kết quả:
    <input type="text" name="ketqua" 
    ><br>
    <a href="index.php">Quay lại trang trước</a>
    </form>
    <?php
   
    ?>
</body>
</html>