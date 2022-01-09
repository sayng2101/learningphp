<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bai 3</title>
</head>
<body>
<?php 
	echo "Bài 3 <br> a, <br>	";
	$x = 3;
	$y = 5;
	$cong = $x + $y;
	$tru = $x - $y;
	$nhan = $x * $y;
	$chia = $x / $y;
	$chiadu = $x % $y;
	echo "x + y = " . $cong . "<br>";
	echo "x - y = " . $tru . "<br>";
	echo "x * y = " . $nhan . "<br>";
	echo "x / y =  " . $chia . "<br>";
	echo "x % y = " . $chiadu . "<br>";
	echo "<br>";

	// b,
	$x = rand(1, 100);
	$y = rand(1, 100);
	$cong = $x + $y;	
	$tru = $x - $y;	
	$nhan = $x * $y;	
	$chia = $x / $y;	
	$chiadu = $x % $y;
	echo "b,<br>";
	echo "x + y = " . $cong . "<br>";
	echo "x - y = " . $tru . "<br>";
	echo "x * y = " . $nhan . "<br>";
	echo "x / y =  " . $chia . "<br>";
	echo "x % y = " . $chiadu . "<br>". "<br>";
	

	// c,
	echo "<br>c,<br>";
	do {
		$x = rand(1,100);
		$y = rand(1,100);
	} while ($x > $y);
	$cong = $x + $y;
	$tru = $x - $y;
	$nhan = $x * $y;
	$chia = $x / $y;
	$chiadu = $x % $y;
	echo "x + y = " . $cong . "<br>";
	echo "x - y = " . $tru . "<br>";
	echo "x * y = " . $nhan . "<br>";
	echo "x / y =  " . $chia . "<br>";
	echo "x % y = " . $chiadu . "<br>". "<br>";


	// d,
	echo "<br>d,<br>";
	do {
		$x = rand(1, 100);
		$y = rand(1, 100);
	} while ($x % $y == 0);
	$cong = $x + $y;
	$tru = $x - $y;
	$nhan = $x * $y;
	$chia = $x / $y;
	$chiadu = $x % $y;
	echo "x + y = " . $cong . "<br>";
	echo "x - y = " . $tru . "<br>";
	echo "x * y = " . $nhan . "<br>";
	echo "x / y =  " . $chia . "<br>";
	echo "x % y = " . $chiadu . "<br>";
	echo "<br>";

	//e,
	echo "e<br>";
	function bcnn($x, $y) {
		return ($x * $y) / ucln($x, $y); 
	}
	echo "BCNN của x và y là: " . bcnn($x, $y) . "<br>";

	// f,
	$x = rand(1,100);
	$y = rand(1,100);
	echo "f,<br>";
	function ucln($x, $y) {
		if ($y == 0)
			return $x;
		return ucln($y, $x % $y);
	}
	echo "UCLN của x và y là: " . ucln($x, $y) . "<br>";

	
?>
</body>
</html>