<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bai 7</title>
</head>
<body>
<?php  
	echo "<br>" . "Chọn năm";
		echo "<select>";
		for ($i=1900; $i <= date("Y") ; $i++) { 
			echo "<option>$i</option>";
		}
		echo "</select>";
?>
</body>
</html>