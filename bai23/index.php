<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 23</title>
</head>
<body>
    <?php 
        $canh1 =$_POST["canh1"];
        $canh2 =$_POST["canh2"];
        $canh3 =$_POST["canh3"];
        if($canh1 < $canh2 + $canh3 && $canh2 < $canh1 + $canh2 && $canh3 < $canh1 + $canh2){
            if($canh1*$canh1 == $canh2*$canh2+$canh3*$canh3 || $canh2*$canh2 == $canh1*$canh1+$canh3*$canh3 || $canh3*$canh3 == $canh1*$canh1+$canh2*$canh2){
                $tamgiac = "Tam giác vuông";
            }elseif($canh1 == $canh2 && $canh2 == $canh3){
                $tamgiac = "Tam giác cân";
            }elseif($canh1*$canh1 > $canh2*$canh2+$canh3*$canh3 || $canh2*$canh2 > $canh1*$canh1+$canh3*$canh3 || $canh3*$canh3 > $canh1*$canh1+$canh2*$canh2){
                $tamgiac = "Tam giác tu";
            }else{
                $tamgiac = "Tam giác nhọn";
            }
        }else {
            $tamgiac =  "Không là tam giác";
        }
    ?>
    <form action="index.php" method="post">
        <p>Nhận dạng tam giác</p>
        Cạnh 1: 
        <input type="text" name="canh1" value="<?php echo $canh1 ?>">(cm)<br>
        Cạnh 2: 
        <input type="text" name="canh2" value="<?php echo $canh2 ?>">(cm)<br>
        Cạnh 3: 
        <input type="text" name="canh3" value="<?php echo $canh3 ?>">(cm)<br>
        Loại tam giác: 
        <input type="text" readonly value="<?php echo $tamgiac ?>"><br>
        <button>Nhận dạng</button>
    </form>
</body>
</html>