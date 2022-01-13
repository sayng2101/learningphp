<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 19</title>
</head>
<body>
    <?php
    $canha = $_POST["canha"];
    $canhb = $_POST["canhb"];
    $canhhuyen = sqrt(($canha*$canha) + ($canhb*$canhb));
    ?>
    <form action="index.php" method="post">
        <p>Cạnh huyền tam giác vuông</p>
        Cạnh A: 
        <input type="text" name="canha" value="<?php echo $canha ?>"><br>
        Cạnh B: 
        <input type="text" name="canhb" value="<?php echo $canhb ?>"><br>
        Cạnh huyền: 
        <input type="text" name="canhhuyen" value="<?php echo $canhhuyen ?>" readonly><br>
        <button>Tính</button>
    </form>
</body>
</html>