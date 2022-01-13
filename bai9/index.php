<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 9</title>
</head>
<body>
    <form action="" method="post">
    Nhap so n (nhập từ 1- 100):
    <input type="text" name="so"><br>
    <?php
    $numbers = array();
    function rand_num() { //function random number 
        return rand(1,100);
    }

    $n = $_POST['so'];
    for($i=0;$i<$n;$i++) { // for loop random number 
        array_push($numbers,rand_num());
    }
    echo "Các phần tử trong mảng là: ";
    for ($j=0; $j < $n; $j++) {  // for loop show number in array
        echo $numbers[$j] . " ";
    }
    $number_even = array();
    $total = count($numbers);
    $tong = 0;
    for ($b=0; $b < $total; $b++) { 
        if($numbers[$b] % 2 == 0){ 
            array_push($number_even, $numbers[$b]);
        }else {
            $tong += $numbers[$b];
        }
    }

    $total_number = count($number_even);
    echo "<br>Tổng số chắn là: " . $total_number;
    echo "<br>Tổng của số lẻ là: " . $tong;
    $checkmax = max($numbers);
    $checkmin = min($numbers);
    echo "<br>Số lớn nhất là: " . $checkmax;
    echo "<br>Số nhỏ nhất là: " . $checkmin;
    $reversed = array_reverse($numbers);
    echo "<br>Mảng đảo ngược là: ";
    for ($f=0; $f < $n; $f++) { 
        echo $reversed[$f] . " ";
    }
    ?>
    </form>
</body>
</html>