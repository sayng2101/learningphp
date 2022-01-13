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
        $a =$_POST["a"];
        $b =$_POST["b"];
        $c =$_POST["c"];
        if($a+$b>$c && $a+$c>$b && $b+$c>$a){
            if($a==$b && $b ==$c){
                $tamgiac = "Tam giác đều";
            }elseif($a*$a==$b*$b+$c*$c || $b*$b==$a*$a+$c*$c || $c*$c== $a*$a+$b*$b){
                $tamgiac = "Tam giác vuông";
            }elseif($a==$b || $a==$c || $b==$c){
                $tamgiac = "Tam giác cân";
            }elseif($a*$a > $b*$b+$c*$c || $b*$b > $a*$a+$c*$c || $c*$c > $a*$a+$b*$b){
                $tamgiac = "Tam giác tù";
            }else{
                $tamgiac = "Tam giác nhọn";
            }
        }else {
            $tamgiac = "Không là tam giác";
        }
    ?>
    <form action="index.php" method="post">
        <p>Nhận dạng tam giác</p>
        Cạnh 1: 
        <input type="text" name="a" value="<?php echo $a ?>">(cm)<br>
        Cạnh 2: 
        <input type="text" name="b" value="<?php echo $b ?>">(cm)<br>
        Cạnh 3: 
        <input type="text" name="c" value="<?php echo $c ?>">(cm)<br>
        Loại tam giác: 
        <input type="text" readonly value="<?php echo $tamgiac ?>"><br>
        <button>Nhận dạng</button>
    </form>
</body>
</html>