<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bai 6</title>
</head>
<body>
<?php  
	echo "<table border=1px cellspacing=0 cellpading=0>";
	echo "<tr >
		<td><h4>STT</h4></td>
		<td><h4>Tensach</h4></td>
		<td><h4>Noidung</h4></td>
		</tr>";
	for ($i=0; $i <= 100 ; $i++) { 
		echo "<tr>
				<td>$i</td>
				<td>Tensach$i</td>
				<td>Noidung$i</td>
			  </tr>";
	}
	echo "</table>";
	echo "<br>";
?>
</body>
</html>