<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bai 8</title>
</head>
<body>
<?php 
	echo "<table border=1px cellspacing=3 cellpading=0>";
	echo "<tr>";
	for ($i=2; $i <= 10; $i++) {
		echo "<td>";
		for ($j=1; $j <= 10; $j++) { 
			echo  "$i * $j = " . $i * $j . "<br>";
		}
		echo "</td>";
	}
	echo "</tr>";
	echo "</table>";
?>
</body>
</html>