<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 9</title>
</head>
<body>
    <?php 
    $numbers = array();
    function rand_num() {
        return rand(1,100);
    }
    $n = $_GET["so"];
    for($i=0;$i < $n;$i++) {
    $number[$i] = rand_num();
    echo $number[$i].'<br>';
    }
    ?>
    <form action="" method="get">
    Nhap so n:
    <input type="text" name="so">
    </form>
    
</body>
</html>