<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bài 27</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
		<h2>Select box</h2>
		<form action="" method="post">
		<select name="myFolder">
			<option value="Folder1">Folder1</option>
			<option value="Folder2">Folder2</option>
			<option value="Folder3">Folder3</option>
		</select>
		<input type="submit" name="btn" value="Gửi">
		</form>
	<?php 
	$thisfolder = $_POST['myFolder'] ? $_POST['myFolder'] : 'Folder1';

	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		$filename = $_POST['filename'];
		$myFile = $thisfolder . "page_" . $filename. ".php";
	}
	?>
</body>
</html>